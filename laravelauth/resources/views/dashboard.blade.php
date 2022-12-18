<?php 
	$reqUrl = Request::url();
	$ArrReqUrl = explode("/",$reqUrl);
	//endpoint API login - recuperar token
	$URL_API = $ArrReqUrl[0]."//".$ArrReqUrl[1].$ArrReqUrl[2]."/api";
	$URL_API_LOGIN = $URL_API."/login";
	$URL_API_MAINTENANCE = $URL_API."/manutencao";	

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//Encripta token de acesso a API e guarda em cookie - Decripta para utilização posterior
	define("encryption_method", "AES-128-CBC");
	define("key", "codeusr".Auth::user()->email);
	function encryptAES128($data) {
		$key = key;
		$plaintext = $data;
		$ivlen = openssl_cipher_iv_length($cipher = encryption_method);
		$iv = openssl_random_pseudo_bytes($ivlen);
		$ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
		$hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
		$ciphertext = base64_encode($iv . $hmac . $ciphertext_raw);
		return $ciphertext;
	}
	function decryptAES128($data) {
		$key = key;
		$c = base64_decode($data);
		$ivlen = openssl_cipher_iv_length($cipher = encryption_method);
		$iv = substr($c, 0, $ivlen);
		$hmac = substr($c, $ivlen, $sha2len = 32);
		$ciphertext_raw = substr($c, $ivlen + $sha2len);
		$original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
		$calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
		if (hash_equals($hmac, $calcmac))
		{
			return $original_plaintext;
		}
	}

	if(isset($_COOKIE['tknusrAES']))
	{
		$tokenCurrentUsr = decryptAES128($_COOKIE['tknusrAES']);		
	}
	else
	{
		$tokenCurrentUsr = null;
		$hasTokens = false;
		$tokenCurrentUsr = Auth::user()->createToken('MyApp')->plainTextToken;
		setcookie("tknusrAES", encryptAES128($tokenCurrentUsr));			
	}
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Painel de Controle
        </h2>
    </x-slot>

    <div class="py-12">
		 <div class="grid grid-cols-1 md:grid-cols-2">
			<div class="p-6">
				<div class="ml-12">
					<div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" id="dvTblLst"></div>
				</div>
			</div>
			<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
				<div class="flex items-center">								
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
					<div class="ml-4 text-lg leading-7 font-semibold"><a href="vehicles" class="underline text-gray-900 dark:text-white" title="Meus Veículos">Meus Veiculos</a></div>
				</div>
			</div>
		</div>
    </div>
</x-app-layout>

<script>
	/*
	TO REGISTER NEW USER VIA API:
	URL: /api/register

	TYPE: POST

	(Body) form-data:
	name:ADMIN
	email: admin@admin.com
	password:admin
	c_password:admin

	 "success": true,
		"data": {
			"token": "3|DMlF5DRmsf0Fmxt3RXRbGRbnROUG30s2xqFlVK5l",
			"name": "ADMIN"
		},
		"message": "User register successfully."

	-----------------------------------------------------------------------------------------------------
	TO RETRIEVE TOKEN FOR THE CURRENT USER
	URL: /api/login

	TYPE: POST

	(Body) form-data:
	email: admin@admin.com
	password:admin

	OUTPUT:

		"success": true,
		"data": {
			"token": "6|ifGqO1YoTYWAzhwUJzRJDtVQRMUpQMZVgyd5VOWs",
			"name": "ADMIN"
		},
		"message": "User login successfully."

	-----------------------------------------------------------------------------------------------------
	TO RETRIEVE MAINTENANCE LIST FOR THE CURRENT USER
	URL: /api/manutencao/{user_id}

	TYPE: GET - BEARER TOKEN
	*/
	
	var dvRes = document.getElementById('dvTblLst');	
	dvRes.innerHTML = "<strong style='color:red;'>Carregando listagem, aguarde...</strong>";
	
	//Recupera listagem de manutenções da semana para o usuario atual	
	var fetchListMaintenanceAPI=async()=>{
		const [arrResultset] = await Promise.all([
			fetch('{{$URL_API_MAINTENANCE}}/{{Auth::user()->id}}', {
				headers: {
					Accept: 'application/json',
					Authorization: 'Bearer {{$tokenCurrentUsr}}'
				}
			})
		]);	
		return await Promise.all([
			arrResultset.json()
		]);
	};
	
	//Monta listagem, se houverem resultados a exibir
	var buildHTMLResult= async ()=>{	
		var [listRes] = await fetchListMaintenanceAPI();
		if(listRes)
		{
			var rs = listRes.data;
			if(rs.length>0)
			{	
				let tbl = document.createElement("table");
				tbl.setAttribute("class", "table table-bordered");
				tbl.setAttribute("style", "background-color:#ffffff;");				
				let tr = document.createElement("tr");
				let th1 = document.createElement("th");
				let th2 = document.createElement("th");
				let th3 = document.createElement("th");
				let th4 = document.createElement("th");
				let th5 = document.createElement("th");				
				let th6 = document.createElement("th");					
				th1.innerHTML = "#";
				th2.innerHTML = "Marca";
				th3.innerHTML = "Ano";
				th4.innerHTML = "Modelo";
				th5.innerHTML = "Versao";
				th6.innerHTML = "Data Manutenção";				
				th1.setAttribute("style","text-align:center");
				th2.setAttribute("style","text-align:center");
				th3.setAttribute("style","text-align:center");
				th4.setAttribute("style","text-align:center");
				th5.setAttribute("style","text-align:center");
				th6.setAttribute("style","text-align:center");				
				tr.appendChild(th1);
				tr.appendChild(th2);
				tr.appendChild(th3);
				tr.appendChild(th4);
				tr.appendChild(th5);				
				tr.appendChild(th6);				
				tbl.appendChild(tr);				
				for(i=0;i<rs.length;i++)
				{
					let tr2 = document.createElement("tr");
					let td1 = document.createElement("td");
					let td2 = document.createElement("td");
					let td3 = document.createElement("td");
					let td4 = document.createElement("td");
					let td5 = document.createElement("td");
					let td6 = document.createElement("td");					
					td1.innerHTML = (i+1);
					td2.innerHTML = rs[i].marca;
					td3.innerHTML = rs[i].ano;
					td3.setAttribute("style","text-align:center");					
					td4.innerHTML = rs[i].modelo;
					td5.innerHTML = rs[i].versao;
					td6.innerHTML = formatDateBR( rs[i].datemaintenance );
					td6.setAttribute("style","text-align:center");
					tr2.appendChild(td1);
					tr2.appendChild(td2);
					tr2.appendChild(td3);
					tr2.appendChild(td4);
					tr2.appendChild(td5);
					tr2.appendChild(td6);					
					tbl.appendChild(tr2);
				}				
				dvRes.innerHTML = "<h3><b>Manutenções programadas para esta semana:</b></h3>";				
				dvRes.appendChild(tbl);
			}
			else
			{
				dvRes.innerHTML = "<h3><b>AVISO: Nenhuma manutenção programada para esta semana.</b></h3>";
			}
		}	
	};
	
	let formatDateBR=(dt)=>{
		var dtr = dt.split(" ");
		dtr = dtr[0];
		dtr = dtr.split("-");
		return dtr[2]+"/"+dtr[1]+"/"+dtr[0];
	};
	
	//Init
	buildHTMLResult();
</script>

 

