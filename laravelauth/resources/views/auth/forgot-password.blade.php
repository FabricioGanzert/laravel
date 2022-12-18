<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
             <img style="min-width:25px;max-width:80px;width:80%;height:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAACXBIWXMAAAsSAAALEgHS3X78AAAgAElEQVR42u1dB3hUVfZPwXXV1VX/KiShujZAFBBUeodJAtg7srquurqroig2LPSeUENvgkjLTOgIuLoWIAlVQUQRyExCkQ5pTLv/c8699817U5KZZCYkcM/3ne+96XPfu+d36j03KkqRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKykaJyw7QMWnF71GJZmuUyWyLMllsdMTHiXCeSI/hNYuVP0fn4j14tFjp9UQzP0+0yM+J9+ufMzzWv87fT78vnjPR+/n/SfT+bd13mbTncun9SctzaUzdLfuj2n/tVjdZ0UUqvDDpSXg1IbEZhFgIZDQ8JobXY0BYYuA9sfB6bCKy2VoNhKgavF4NnsNzfA5es8bAY/iclRi/O8mcd8HHbMrI0wNBdDcxrkRtXMA4Js+4Yj0M78H30nXAz8HY5HWzGMEk0cxBJHlZXlT72QfUZFN0gSY8aDXT0I1R3Zb/4RFwLtQ4iWNpkltowseSsFoiL6RfTp8U1clyGIQvD4QpN9aUAf8h3XoZAM6f4L9cnpSBbLs8McP65yRzzhVJFs7w/4GteP5n+Rx/Hd6H74fPmvA78LtoXAhQubFdMvKie26wRnxc7RYQGEQjmNA1BUA0mQkQY+h5ARRJGQcFAOeoCaooAprdbNOOwgSOFtosOpjPd1t6CIEDBfJKmMjXw+fqADeECXw/TOjOMKEfhO98Ch6/AOf/gWM/+P5P4HwYvC8VXkuD40x4PB9eWwK8DD63Cr5rHTz3NfD38J5MeM9WeG07PP8jvL4bfu8XOP8Nvms/PA9sPQjvtcIROQeey4WjjZ+L5/nrB8X798F37oXv+hnOd8Fv7ITv3AbHLHj8A7z3G+AN8HgN8Ao4XwrPL4D3z4bHU4DHwftHwncNhNfeg9fegO97CfhZ4Efgfd3gtVbAd8Pjv8HrN8FnroLHlwMYxQQHyGRNIejGSBeEg4FVTVxF5SC3WxN80vpotoM5223ZAS9wsF4GzyfA662AH4WJ9wo89zFMzAkwkb+A8zXw/CZ4vAe+7wgcz8HEL4Tn7PC6O3FZHktacYQlrzrGuq85yXp8eZr1XH+O9fyqgPXckM/P159lPdadodd6rD3FuiPDe7uvOcG6r0Y+Tp/n/AdLXin5KEtecZS+P0k76nj5Ed/nNOafpe8gFt8pfwd+E3+X/gP+l7Un6b/Rf8T/uu4s/+84BhwLnOPz+D76v/CdScsOMbgGyA64HkVwrfLh+hyDxwhaW4A3wLVaimAC124QvAcB5Gl4Xwd4T13gP/kAAncvoqU7hi5Ez2XH1HxWFJov3zXdKicUmqCxXpOsPkzOf6O2g9f2wLEAJzJOahQCKbgoDCgcyavEhF9+mE/6jDzgXDn53TDBXfA9LpisThMXBjs8JsZzeA6PDnjsQGHhAoPvtTrhOWJ4jxPe40zEo4W+C77T5sLzRGIbP5rlY91zejYbXzPhd4jn8DfgO+m3Er1/2yL/nxX/m4PGYcFxENB5xoCf4+wiAKRrkMuvCYIhXCMCHgLEExxUEEzgmiKA4PN07RAwwEIBXgzf+xb85l1Gy4DiJmShdV12UANzRYpKMic101FE1WN1Qv9/MFlfhYn0HQol13ZnSLBp8tJEJoGhiU+TnwsFCSYXchRIEHiz1Q3n7kTt3IogQI/xXICCWwKEOFZFhv8uxkbjgnOzTcd8rPw6aO+V4ENAIcEkkYOiQwCRG685WilkccB9EGC0Gb6nD3ANPRCYNEvORgFaRYp8hV+k2ISwx/RYqgHBDSZufh4hjQ4mN2osrs1IwF36iY3nQogZnYdDkMxWYpPuvDKz9j8t1jCBCH4fB0W6xh4AdUmrA9+DrgXeI3juOLxvNDxXU+8a4LGLJSfKpEBAkbfw6wJ+sTqLAMx8EHwwPdE05WY4mtpcm8mJ6aOlzXzim8okQDm+nO7FhtfL8BtBAk6onCRY+8/+xhLy9+quo+E/IiDwe+ABBbIaHOhm4T2D95yG197vZsmNFfczVh/Q7Wo+oia/MvttegsgVmiLW+D5b1CboOAncv/VpdPo0mwvWYjTvSY9TlYDgyWRgZzHTDBpOR9m3ZYjH+EMZi7nP3R8VHvdhMC07LD2+W7wXTDhBduI6XeIbSFyru4/iv8pWfxeV0se6wLc2XKIdc44xDplHGZdlh/V/U/v/yrGqX2X8b/5XMf0ksFDfEYDYRMHBnS37B4gsG6H55sJlwBjOtEigBsFroQSgks3vWfVCb81Rpw/BJPlLEbauWlJwSomTXvjJPVMTC4oXDA8gvsHnXcVAik/mwSfSUo/wBKX/M6SFv3KkhfsZt3n7WQ95mxlPWdlsgdmbGQPTPuOPTjlG/ZQ2lfsoYnr2MPj17CHx65ij6SuYI+kLGOPjjazR0ctZY+NWAy8kD0+fCF7ZMh89s/xFvbBvK/Y+3PXA69jH85bz96atpI9MXA2e2LALMEzS2F4z8BZ/DPIg+YAz2WPD/6MPT5kHnt86OfssWEL6Df7zF7P+s7/hvWZ9z/2+vzv2GsLNrJnpmxgD8L/fWgSHCd/zR6c+i17YPoPrOfMzTDGLTDWHaz757tY8sJfWNLifSxxKVyL9IOaQPPreFgHfEcBPOA6Zhyia+kfLHRgYNbAAEHbjq4BtxJsr+nuvQYCpgyVMrxkzX4h/HwyWKx9MNUlzH27ziT2Ev4cPgnFJEXhx0mc/MUe1mPuNprsJLhjV7Knxy5jb8/9ir332XrWf+5a9umcVWzgzGXsuf4T2NNvj2S93h7BevUdznq9NYw9++YQ4MHs2T6D2LNvDAQewHq/jvwp6/3aJ8Af6/gTD+PrwM/8+2P24fDJbNLsxWzs9C+IJ8L5RyOnsmf+A+8T3xkyvy7/xwDtt3rB7/6z7xA2dtoCNmHGF2z8dDgKfuXdYazXfz6m9/PvGMjHhGODMfZ6aygfM479nZHsmXdT2FMfTmBPfjyVwAdB5rERi9gjYyzs4XGr6Vr2hGv66IKd7NEle1l3AE90C9Di6CpTiRoQa8Cgc8sAyMHSoPiAxTZJBwIxEgR6LD+khOLSSfPphd8mJ0H/Hlzru0U6zb/gw0RCrY6mac/Z2aCRl5OWfPq9VCHIQ2my94aJ/8yr/dkb/UezCTMXsXEkkAvZ+JmL2fBJ81hvEIZefQZrQiGZhMPAwzzc14vf8uWBE+ex1FnpbPSMJcSps9NZn0GT2FNvwO/QZ4aGwP5/A7/nqT5D2H8GTGAput8aM2spGzZlIev99nDd+43fqR8rHzsCnjfofSpAjwMdAhC+PnDCZ/R7w2aa2Udz1pDF8ej8bcy09CBZCGg5eAGBFpDl6UybA2sq4LWFuphPtHANlGBcGsJv06LAms8Pmp+E30wpJpc/4ccjCn7S4t/IHH/qw0k0eWmCvjFAaDiPEEsheXfkdDZ2jlkTkrEgkP3HzGJP46QPSRg9AkRHL+4Fzz//zgg2atpCljIThHHGYu348odj2DPi98LFT70xiPUbPpWNm5NOv4E8dvZS9snY2ewZvA7yf5WJjYD3zJtDxdgWsVQYU8oMANQZAKYAqq98OJo98f549si4VeBS7OWxBmERCFdBl5UhN8COIADnC3QKIVofD1J0kRKaeVp1n9lWTRwfQLNfRO014TfxXDyfSGhmAgg8NOFLMld7v/4JaSujltQJqU4oB4ybS4IhhWQcAEDfIWnsqdcHhUUQewlhexo0/KsfpWpCLwFgxNQv2N/fHqa9L1yM3/fp2DnGsQEY9Bs2JSxj06wFbWxjxdgkuC1lw6cuhLGBtQH3glygd0axR8DtQncM3TMfa0ArvLLae65DELCOEVZADF9ZaTNkhBRddEE/myHVB5PhduBz3Oe3OnXCr5n8qFG6z/+J/FOcZGiu+gi8H62MAoKTEwXQWyhfAUH1WADhEUwUur5DJxPA6DXyp+PmRET4EVRGTPmCNLL8vVRwAf7zyTgQ2EEGcArL2Ib4G9tc+g0eUximWWRPfTiRgo3kqvlmC5gowHJilSaAwPPCBaymdw8VXYSmv97n62E+jMtvs7HcNJEX9WiaXy/8GNDr1XcEmflS8PW+eqBJiyb3yx+mkMDrTfKRYKI/987wsAsl/t5HKbPIxdBr5HfBTH/qjUFh/62XPxhjcDPwOHr6IvaPd0fC6xU0thHGsWlAgLEEuL4PTVovLAF/IADW3jKMGViL4fxOIfwiE6RcgYs56h8rgGB0D24G2n19fi78mIYj315ofYOPX4pJjlrrzUGTDJN2LGhIDGSR1gojAOB39Ybj0LTPSQvrNfJrn44Pm0bWxgbf12fQRIP5j781ZNL8sGr+0Mamt8b4vUKLDVOm0oXzBgEw+x1cAVizk5ftj5EWwDPWrSooeJGb/u3J7LfInLGv8KPml4G9YLW+ntFv/WD0DIPZilrr/ZHTtUkbTg35z/dGsdE+GnkxewGeD3cAEP//B6OmGwKAOM4PR8/UXJuIjw2O//Qam7dLhkwgkLqciqt0NQP67IAdi4VAMQwwBoaVFXDxaH+Lbp14Rg5239mBy1kTLTYvv58H/LrP/5FSeuhTlkX4pQYcTCm5pQa/9Y2BEzWzNVwaGQUStaG3hkSt2TsCGhmPgyYYx4YA8NZgXXDzzaEXbGy+IDCAagl4TCBHswI81oBY2yFWFJpkalg1GLkYTH+p/TXT/y1CfIvB79eq+TCC/FT/SSLKPyxk4SetBZ/5R78RbBT4xN4puZc+GB2RlNy7Xik5FMiPxswK+289o6UbjWND/lf/lLBbADS2Ed7pxnSKCZQ0NkNwVhx7fLZdyw4YXAEQfqz8BEWxWswVrTWZoipOycutWuAPjn8FzsWGF4lmQ75fmP6H2aMjl1AkmUeVy6b50fz/98djjRFyOB8+ZQHr3TdCKblxc/ykGydHKN041iezMXLqQvbc28Mr1dgMMQEAdKzdoBQhAr0uHiACv65kquq0dRJWQKzKClwskX+LVS7yeZfWjovlo95+f88Zm3T5/aEha3592uptTMmVUiQT1pScn3Qj1gWgwIY7Jfe2d7oRTPIB4+dGKN04vMxjM8QEAHgR2B8dY/FxBWS5sEgLfolzpZs5NzpRLR2u2tTF/Lte+19r1P5WuYSUTwQ0/T+cqAFAadH+0gJXH6f6pq3eCVORjN904wxjuhErAtFUr7B044hpkUk3+kmlhjI2f2XIPT7boWUGPCBAJeAumh8Waye94lDdhKpk5N8r7Wfh2t9k9q/9H57wJVX46f3+MqetQNsMm7yApc6KXJFMSelG/K1BkUo39h3KhvlJyb0+YELYg5vhGpveFcCsAK5q1KcG/VgB64TFGC33SFBUxQhMOM+ST4vVo/0t1ONOp/1zWdKS/ezp98dR2q88pr/UWi++P9pvkcwLESiSCZhuHBW5dKP32Mb4SclVtrEZLYHBtPTaNyAY2AowpSsQqIJFP7LBh5X7/mabX+3/EGn/T8ul/fVFMqgNx86qmCKZQOnGPhFIN8qxGbX/ErJ20DKozGML2gowCyvALKwAaiCiMgJVS/tn5KHQRwvhvxaYtL9Y7FOi9g9H2uo98Ie9U3L9x0SgSKbEdGNkVgC+6zW2YFJylWVswVgBolGpCxuO4p4NBkWiMgJVKfLvpf0tkdP+3poLI+JjvYtkIrQCENONKT7pxi/Y3yOUbqTVjV5jw6xApMbmnUodUY6xBWsFUF0AWAFwJCsgKcMajS6ACgZWAUpayvffI0sAfH8459qf94nzo/3HGnz/8k5ezIVjTty7SOaV/qnhL5IJmG6cE7GU3Eh/KTkQ1MikG6eEfWxltwJEMFm1D6v82t9jstneEz3jK0T7o4BjNVxFrgD0l27sNzz86UYam9+U3CL2PJjqz0RkbLPDPragrQCREYDjeppb6bnRJrFbsqJKHPyTef8kyvtb87S8v0/k//ewaX992uqtwX5WAI6PVEqugtONg/2k5CbOi8wKwAiOLSgrgC8UE9WBwgqQdQEqFlB58/7aij8z1/6mAL7/wxPWhlX7Sy35oZ+01Xsjp0UkJVfR6UZ/Y/uAUnKDq9TYylAXQFZAt6W2aHQBlBVQGbU/36pb5P1t1wHnaXl/n8j/72H1/fXaCNN9hrTVLFwBOCFiKbmKTTfO903JDYpMuvGNCI8tlLoAtALgvIuhLkClBSuT9jdG/nEratoQwmKtMO2PWukf/UaSlvJOW6E2i0RKLlC6MTIpOf9jezlC6cZIp1J9rYC5JVoBWiyA7xKtWZyKKgF1Waar+jOD9jfbNN/fr/Z/L7yRf7luHf1To88amRWAvS5IunGc/5RcmBuOyljJwAiPzccK6DOY+gj6ZgSoYQyPBZhtXfRB5m7KCgieUlJSooaMS6PzYeMmRg1JQZ4UNRR4SOok7Xxo6qRoOI8empIWAxwLr8XI7xiamhY48m/R+f7rSqr5D7/2l0EyXOzjXSSDkexw++P+0o1jZi6OaLrRd2xLqStwJNKNNLZpkU+lBmsFYByJWwE2sgKSLNbobmZbQCsA57E4wjyeFItzGeZ0DM7toWKuD+FzPUp7DMeUAfPpc0NGT744hF4OUp7jRRiSmlZtSEpaNRDmWODowX6E2ps+GDk8avjYqf6r/pZSmabO97fmJfFusH5q/sOr/b1dAH9pq0isAKz4dOOQACm58DccreixBWUFGPsFdDEqnIAgEB2cjKQBKGjKDuQCAANk5tOUqVEjUib4VXpVgrhmTxOaG9FvauCLMG4saP2Jl8FnroL33gBAcRtckHuBu8NF6RjIAjB55f0BAN4Xm0FWqPaXaavhPmmrJRFLyWH7rXEVmG4c7iclF86Go3prw//Y5oZ9bOWyAkTXIH/BQCn8cGwE/DjM4zYwp++GuV0L+Bo4//PglAmxpchP7JCxmvxUMc0PfxwGzc8B3XQWQSsQ4jdhQIPhPA34cxjoGhDyTXD+M5wfhdfy4bwYPu9ImTybwft/CAQA3cwHvLS/jWt/S4C8f8S0f+C0VSTaZPN048yLM92IYxvjf2zhtjZCiwXw6kDKCJhFRsDsvy4A5nE1cRw8cdYChnMZ5rQDHhfC/D4N5weBt8P518BmOJ8JMpACxw/gcc9hqZOuEJ+PkXNeuhVVgoaN0cz+GA4CkxrAAP43bOxkhkI9dtpcljplDhszeRYbnTaTjZo4nY2cMI0NHzeF4XuQYeCuURNn4PErfwAgF2aYPGmZ90uM/I8Pv/Y3pK0GVmxKriLTjZVibGHsN1DmjIBnpeB6MeeiaXdhLysA3Vxx/BjnOsx/O8xdmtc4x0eMn8pGwpwfNWkGG5M2i6VMmc1Sp4JMTJ1DcgDv3Q9A8Jj4juhhQviHpVQBd2BwqgyApAnhT2sKQHAWhR38HddQREK4IIiIAhWdcIGccI6vueA1N5y74SI48ALB8b/+AKD7sjyt5h+O1wEfSlouav4tss9f5LW/zACghqqYNtlDyKqoqHRjoLFFZHUjjO2FChxbqFaAUCqu5JUeK0BTQLo1AjoL4JOx0z5DC+A8zWma1zS/XcBOOEcmORAgAXKR5kQQQGCAx6/prejBY6uAFcAuf9QTBR0z6XL487tRy8MAz9PgU9NQuHFwcD5JnvtjpwCAr70BQK73123uKbS/rcK0v2/a6jPftJWhTfaQyKYbJ0cg3VjS2CKSbpRjWxrxsZVmBTxRel3ABr5GQNYF2HwBIDWNAEBaAAHYLZh5QCLNwS2GKfj6feK7YqpOADB1Uqww/Z8Xmp9fAIGAJVyMoAAgkVo2i7x/hvX6RKH9absnbWuvitH+lLZ6x3/aKiJtsis63fhOxaTk5Nj6VdDYyp4REGsEVtIaga56K6BbRm5ZAMDDKWl6BWkXMbDFwp2OrhIZAYz8y9w9nM+nQWAQBAU/JS1Y4Q8IANL3T/S0bf6gxLz/+DUR0/4yaIXC4JO2ilCbbBSETyglt7RC0o1ybIYW4JFKN8L3feJnx+FIjC0oK2BQKFaATZubZQYAaRFwRenCeAEcjw4dO+nqKpMNGKoLVMD5f0mIwa8JUfgDAkAS38JZdvu5Hljz/U1mf9o/NWLaX0tbDUkL2CY7Iim5Kb7pxn9HaFdef2MbGKGx/Z3G9oVPxSFWIYa730C5YgF8i3EeC7DYuuozAmgFlBMAGFeWk9wUDE+ZVARcL5Taggtt/mNxgzxfhf4/Bjt0pk2ZAWBI6mTDij+T0P6Bff/Ian+pJftXUNoKg2AvBUo39ovMrrwVOrZAOw5HoN9AcFbAgIBWgK4ugFsB5hywAnLJCig3AKTwQDgCABwxLV5DugGVPwsAwq/FAFLShmK6zxMDKJ8LgO5Foifyf70x8l/x2r+i0lbGlFzF7cpb0WPr42dsgyPQbyCs1YEUC7B11VcHyjRgmV0AbgU4MVUIx22fjk0R87+K1ALIFCAc74SL4RLCz488COguCwCMGDNe35SBa3/zhdP+FZ22QhMfdxf2TTfOiMCa/AswtlEVM7YIWAFUq5KUzq2AMgFAinc2IO081gbAZ98Q2j+2SsQAhoxFF2Cypw4gJe1TfhGoBsBOtQCpuny/lhkQ2QHPhfABgGc+3yK6/VivTxS+P6/599b++yKq/S9E2kpLyU0wpuTGUrpxkhYki+yOw7IFeGTGhht+pHqN7c0wji3CVkA3aQWU4AK4PUc+94fI+Y/nIBcgJw5gOxUQpaR9O2C0CKhXlUrATz+d7S8YOGzE+GlUBThCV/E3NHWy8HnScOCeQGGKfwB4YMmv1UTA5YOSq/4ir/1LT1sNjkhKbpS/dOOHkUk39hs+tcLGxncc9h0bbg0WyQKg4K2AOaV1EOZWgDknZuDYaZcJV+BTUQhk1ws/FgGJOe/2rhDEmBlWBsLrG+Bz1wsgia5SawK0RUApadGe5ya1BZSbBwPbAwM5IWr+z+MFoIFzYdfHCZziObqwDy/aI4X/GuDDScsPk/bnEVmbH99/sM8mn+Fi37SVnxWA0kcO0+9RSu4jkZIrId0Y6bG9HaGxeXYc9oxtBIzt72EcW7n+J1oBs8EKWB6gX8DKP7R+AS/M/d9VImr/0Thu/dp1ys3FS9+nMxHkw2pAjPSfhuMBeO9qOP+7rqioalkA3Ar4VLMAaI1/in5BUNqfYKB/Aa4h1gi0hvMk4LfJCvAURDhHURAkbZPX+v+U7mtPGlb8adt7rzjKtf9rnj3+IsUB01aYkqM22boKwPKy0Mh9vVNys5dSn/5eERrbCN3YUrSUXNUeW5muB/xHXhdgtALIBaC6AJszefVxtEg3JVlsV+oU4VC+FiBNugCO0ZMwK5Y2l+Z8yqQuINj3wHk94GvhfX82ZtSk5k/TMmtVCARmaybL0NSJshdATMkpxLQhZP5gKST5RGmu4eA6jBk1ZnSPpb/fChd8Dflb2g4/NrlIg5kyQPsv/i3i2r+XLkgm01b6Ihlsk00puTBqLU9KztMCfLQIkvFdeQeH/bcCje35iIxtiGHHYc/YpobV2ij3f31zMOs5K0vEAoQrIEDAhCDA1wgc6Lj8WMfUkSMeG5oysXAolvPq17akpGWXKANjtCYinmX1KVW4QQgJ/5jJusGkyU4o0UNSabAxGDSROX64UJsQJeGxY1jKRPeIlInszdlfsuT0g06xEsulCb5FBwBo/i/ex3rM3cp6fLYdjtsix59tY93h+OD8nezJxbsN/PiiXRH73ccW7qLfeEIwnj/0+U76L/if1Ngiec+3U+PQ5C/2kLLxWAGiPJjPQ2fyqj8IIF6Y9wMbOmEGGz5mPPj6k11ihWsxzP87hT//J5z7uk5B0byKNi1qwISZIqB+kXQGKq1rkHANZNagAVyw86NSJ7KB46a7np2f6e6ScdglLrpTZ3bJI9PHAPDio5lWEdwt4xDraskzckZexH4Pv9v79/A/qLFVFMPcgv8pzH8+78RcNHmUkRPd0s7LjrgfXrzH9f6kBWzE6HHOFKyHSZ38H+Ny4UlRU6ZMibqkye12R/17xho6/2jCHLowY0eM6N1/6mL24OK9LryQuqWYBrNLY3FDdBFaxYojxoa5pgMBXX0AnOe4CTDBNeg77ys2cvTYeTi3n523OZZ1iIp68vNtUX2mZURd8iQ3WYALFpWcfkB09rX2ToILCReQLqR20b3YZLwBihVXOPufg1ZdrUCuM2n1cXRhZ8s53zXjUIyc+ybzgUtX+GUrJeyqoi3vNVv7dV99giVyk58QFcGge4aNJWfw82T5WIGB4gvMPnMzw/NYl6Vy9lh3Fs/XdMnIu0wIf4xY13LJ2v6eDT1kbzWz9Z0eX56WF82FFxF7sbVfksNaLTrI2izKYXjebjF/jMduIPjyYisQUFxRGj9ZnHcQc7PtYj438dhqIX/cNd3qThYWAcxne8/1ZzFo+GVnc45Yzcr7WZrScy5B7e+1lx9cjKTkVceYtjUzXLh2S3LwArrf/e4PNv2nU8yy7yxbeyCfrd5/js3fc4Z9svEYe2h5Ll1sBIIkBQKKIyz8SULrS+Xz5jdH2QyYm8t/P8fWHsxnK+D42c+n2aDNx9jjK2luusWcxOP5nhvy8Xsmirkfk5Sx79KzAhItOVEdzSf0HX2vAGT8DaupcGkvXmBAVvenm46xnDN2VhIdLXDQDRCfEdaAVQGB4rALP2pz0Oqk6T+BufnLyfMlzs3TxU42d/dpUmrdPCDg4rtWWdvpFWDipbTLkCfwpw1+kOjqY0/m6Ooev/2kW15It9vNnC43c7j4UZ673Npb2K9wM/614TBZA8olUBx24Yc51REE/0GwONsA12oAACAASURBVNfl5DPvueksYW5+bSsgd0AEsp3dVx/HsuHs5BlHpRxwXv3bJaD907XNPEQk1HoHoGExBv1Ai7s7LrW6//XVYbdTXEC8oHiR3eKx/oiMFxovONJ5p5sNyTxOIJCkgoOKwyT8GNRDk/8f6w6xg8IixXnndAc/NyftOEnugFBODh7rsr3mFQO7BLR/Bt9ZVQMAi3UxXQxcWw0Xp9XCg+7Pwb9HkhdPf5E15NVdcAkUkvBit1MgoDhMwo8K5fWvj7Az553avPQWdm+Sz0lFtut4McYMZP2KCxezwdw/CnJwg7AColvsLIzqarFezL6/bOipIV47/ao+tABQcNccOOel/QP7WfoboDe7puw8pdwBxeU2+3E+vgHCX+hwGRRNIMH3nptyTh7Kd7Cey2weEAB3V2xjN1LfTeiitgJMYhcVkyVH+j7fdF9zAk0hp6ym6pxuZRsPFWroWdpF9gcC8jxl6wlKHYp0oprYikMSfgwqv7j+MDt3PnTh5+/zWAL5dhd7dGUuxQK0hWy8rLgQrIBbZVbgoq0NMGUYN/KE40Pd+RJKWd8v0yVsN5hL3ho9lIut/9yHP/yhWQIKBBQHm+pDRfTEqjzS3GURfm9XwO50Uwyh01L6ftFMxOro8eUZdAVmyqC42O/y4gz+YcfU94bsk+v6MykaavFof0yV9AAzKfecI2QACAQCBYC8L6w7zDouzdGKN9REV1xSkQ8ecS7u/KOo1FhUsACAR6wZQKsiSb/JiNhnAB7fKVwAsgI6XUxWQDexb5pJRDvh+DDX/jan1ltN5FgfXpGrmVyhXmzvmyRRe9+p86xHBvlfKh6guEQWaWhm+e1suYXf+3NY14LfnWxczUpWAGj/mSIoHpuYnndxWQHo06DvL30bGOR3VO8P5r/U/tLsenbNIVbsdJcZALwvuryBq/af0y4+AoBixd6MbmIbmCOYSvaOJ5VnLkprdPQWT0yKrxoUVkBGLp4XA98uAoIxF4/wi+IGXdFPZ9xj3dPVx7PgpyP4R//66rABdctKbl2OVt4AWSPQPUNpOsVemj/Do4Bkus/lDs88lJbo5J2nWKtFnmpVscMQBgQdVAhnsaXKLFlXS56WNavawT+xZ1qiJ+9v6bH2FCKeQ1s7LQAA/aO+/zvq4z+V5+LrbySWZj61Kpd1XHKQ1nJ3S89RrJjYBNxh8UGWebjQJ+hX3jkoFdrcn0+zlgsPGhWQmW8zloQNR8y2YyAP1YWcRF80VoA0aWBQDUxyGy+JfjrfC2usP/j+j3L5XIFAQN6EtXtPsltHZrG7U7ewu1I4N0rxnCu+tBjvfZOxW1ndYZlswIYcn+rTcMxBOfcW7T1DKwf1AGASKUFUiKIg7k2ZLUtaZo0yLbVWZd+f1vl7Sh0t1hG85h9BwOrW9fbTii4Gbj4WdgDwdgXeXLaP1R60id01Ops1HJWl+BLmRjAHbh22mXWYvIOdLnKEzfT35wIs23fOUJzm1UTEiath4bhDZgISRd1MFa78s2kDMGXYrgKUO4grocRefj4+GF6cYVm+AZhwWQHyxuaeKWb3T9zO6oMl0HBkJmswIlObEHfChFB8cTPe5wbivjcancX+NiKLLf/5hE/UPzxzz+NOrD5wTp8FMLQTk/sLkHyYbZ311YFVfd2/LHF8mNb7U95fVEN5AQBGYEdmnwg7APhzBRb+cobd99k+1m7uL+zeKT+xu8duo8khJ0bDkQoQqppQB3peL/B4jqb/PZN2stYzf2b3zfmV9fvmiGHOucM89yQAfHkwn9zcJH8AwAvhHGJV7AyhQGN427AqaAUkWbj572l9ZF3IfRwqenD7swAwRYKpkkgBgP7G2uGmvLThCOtsht9elstM6VbWaeF+1mbOXnbf1F2s8TgPINSHidOgFEBQYFHJBH6ETuBTt7JmaT+ylrP2sA6f72Ndl+bwdl5w35Myctlesa7f6Q6v9vcGgPU5+Z5CIF8XgPcK4GtjjgBfL+QmOjGjCnYMwrp//PNiEDfAAI9hpBPNHJN3V1+dCzAi+3hEAMCwQkvckG9zCwyInJTBwQAnBeaFOy86wNrOBUCYtos1Gb+d3Tkmm4CgJEBQQFCxQm8QeABrfO7usVtZ88k/slazf2EdF/xOUX6aY+LeehTOQTZu2wld4I9FZM7J+YbdrAJYAExYAG7aZWgV9guwPqovnquqi3+E+W97IlnW/fPAX0AA8FeEEe4borcE+n17lG6Kd4EQ/a8Mj5bA57osPsDazfuV3T99N2s6YQdrNGYLuQr1haZRIFAxwu8t8GitoRvXes4vZMV1A2tOD+aJfu4tVZ0uz2VHCsIf+AsEACv3B4wByP+IroB0A2bLBUKmqlgPICKY0vyfJrqi2vWpP+8STBTE/j/84VdQw24FiOOOP4pYl3SrT024N2tdYHFSLeOTquuSgwAIvxEgYAwBJyQCggKCyAo++vAo8G3AOuu8aD9fwAOCzgW+hHuor/gDd3PO7tNhzfmXVgew5NezrPWiQFkALTXuEoHyg8BXiPR51VohmGQ+pNUyJ5pzL4OL/ou2p5/Z5g7UXrnzUit77stD1NknnKnAQFaAy7tGO8O4IMT73C8gZHBAQK3T9rNfSRs10FkECgTCI/wk+ODLo1mPPry87oklCLzJz9oPnGcI+E+uyqPCMO/gXyTmmTPY5elmfWoc2+LbWuiXCVc17R8tUhmNaNGPJVcugHCXVJKJN0euwooUMnunBX8+UawtFCpppVhpgIATEs9bzvyZ+6Yj9SCggKAswi8j+KjxSfCX5ZZ4D7wB2t86fxTCBb+cifgc04MKNhR5du0hKjdOKrksmRcFUbMQWz+RDahW5XoE6Nb9P09NPzz+f4n12KiJB2w6ZqjI0i5oBK0A/M1Q+gYEAgQJBB2/+J2CUdJPVdZA2YQfGTMz/nx5fxZZaev8UcE8tTqPnRHaP5KaX2abkLBtuL5NXYls1noGLpRlwVUKAMDsp2WNwnwZ03P9ORyMPdidVrD76rqD+Vre3js/G84SYX3Ptq7p1jKvI/cGA5ywqLHumbiDzFcFAqELf6Mx2ZS2SxaWVTBavjQFg9p/3p7I+P7efQKl8Oedc7BHV+QS+ASxdwXFAbBFPhx3J2ZYq+nb6VWd5b8Z2sYfy7uvPUmoFigA6N2QoZvowf59XoEhl2roEOwuP3p7WwHYPUi/ZLg8+8TpJyumpBQIhCD84DphjX6nL/ZrblV5hV9G/rEt1/FCZ1gyTd4dgeVc0jeoPZzvCLUhDa8KXJaHFYHngG8SlnTVWRyklf9abLEwoB1iww9nYikugN5U6wpHvGG4I9ApYa5JkhfZ5actc1naNckbhivBOi61BmemBWkNyOfvnfqTAoEghB/rKzDKj+k8Kfzh2P9Ran9ckuuv3XxZtbx+XwDvBUBY+ff4yjyyaENSKp7GoSgzzapcIFDLAFhsVwIfouomi80Val82PKJf/hig9pitJ9imQ4XsnN3lt9KqrIDg7VZgB1hZrVXWCecXBGAC3qdAoHThT91KBViy9qK8Wl+ybDdnPWsPut2cv7kko/r6+JR+Hu45cZ7N3n2a/XP9YUpro9kfukVpJSuAy401SbgAMVUpACgqAG3Xwh8/KyoA3WUxp+V2TIjeqJ2fXp3HhmcdJ3RF38qfgMsNGQLFDvSf0aM4Eu76UlKxRnlBAKPZCgQqVvhlkdlwr4Vm/uaBvxWk/jS8JLROUTFhG/qXNhwmoMFcv2j+6aVIrD6cZMnx4URLDi0MSl6FlnPOEzKoXpyZEJW/Oa4quABWkQK03gB8jvyZEAHA2+ST2y8jorYRO7EiouOGDWk7T7L/Wguog2ugGyVBwen2Dwz6dE3vtVr31nJNvkDugD4mQJFuJfwRE37JWGOyQ5de9r73Li9hD2Q5osBvOVLEcPMajBlhTAHnihR6mWpM0gk8CnWy5SDwAToHYQagyAM39xDrbD7COpmPaoyPu5gPu7ua85xJq07g+3uhLC34qt/lBVlxMQVZ8dGFWfFRhVkJJGt4XhljALIGAADABgBwiJksNnc42zclCbOuI23PnENmOwICojC6C+bfztINx2KPYDdwkFFbvLmB122HBwSaTdppAIFLV/gzIyr8SaLC9J1vj2pZn2CDf6gMfjt1nqxNjB1gt6pHRDQfBb4d3wLcMCel0KPAJwF3MwNAgFC3TT/FWqefISHH13ta9rFHM3az3ssz2QsrvmMvr/iavbjif+z55RvZk8t2uB/M+NX5wOojrH368Se85atgc42ogsy4agWZ8THAGggUVBYwSBQWAByvK6sLEKxlkOQFCIjC6C4g42O8YWglIChgKSaaa7jjMG7UQCWafubB2sDLNsMGAnjUpwgvJRDQCz/WSnReHDnNr5n/YpGZv/hREQj6EbAet4PCwHr9tB0nGW5Jj/UCEkCwkw8qGb3Ae9xEvdCD3w+aHQW+ffoJ1t2yHwT8ezZ07XT22YYP2fpvnmXbv+/KrBubsOObb2GnM+uys5m12bnMWnCsxc5k1mGnNt/sPrKpvnvvpnbwvsZb7Vk3jM3PTHgNBLw98HU+gJAZF1uYFQeWQZwGBIWZcRcyBqC1Ab8a+DTvdxY+APAVMJsPIEjtjTcMUzAICIjaiN7YkgkDi7jrC6L6Rz8cY4Mzj7NRW04QUGCZqFwfEK6J6A8EsHy46YTtlxQIGIV/G+uy+GDEhN97a+9Bm49ROe5QuNe4vXc/EPJXvjpCgi627SKwQGGXATwZkO6uaXhvRcTNe9T07dJPsg7px9gTy35kg9fOZMu+foXt++F+Emxn9vWMbbmKsexr4Pw6Zs+6kRVnVWdFWTV8GJ8/n3UTc2Zd72Y7qzP2S03Gdiew4ux4Bm7AMdD4a0HzvweC39QIBGQRxEiLAEGgMDv+gmYB/gJ8PNQsQDgtBH+ggDcaby5aC4jqaMrhjcfYQhsBEpHYP8AvCAA44VLjSwEE9MKPaya6LKkY4U/UZZTw/uKxnYgjYWAZ73c3XdA5sLBz5gqHC77U9j1A03+0ZgFb901vBtqbuUDIWfZfmCPrBhJq0OCk5c9l1qTzAuL4QOxG5u+Ld4Fmt8PRAQLvtm+NZ2xXAmN78LU4fF92IYABvOdmnUUQXYhgoLkGAASbEyo0CyCPVwEfoZ1QzRUHAMGAggSGJHHTJUBEejNRHxCA3+vqBwQuJiDQjwfHiGPtSsJvi6jw+2SUdPc4WXf/S58resHnpn5XIfiPL/uJTV4/DDT9faCx/480fDFobynw+V6CDoIqjkExAQGegxC7CxEYsuIAEOIdghn7EcDg5wT83gJ47XN4fysph4U8aEjpw4LsuIoLGOosgCuAbbi8sSItgKqwBZU3CKAlgD0GLrYUofeKPhwjjjWxgoS//OwRfgzq4TkKPgbwZm34hB3a1BCE/mrQ9P8nhL6mX60epMAHAQhxHBBI+5MF4ATBd6B7gG7C+a30vpUAFi01iyArLlbGBMgtyIyvsBjA5cD7dBuBKAAoCQTSc6hX3cUCAt7Cj2MzpfsGQyun8PtqffTv0ddP+XI8s226m0z88+DLe8z6iAh9qdaBsAzgPA6sgjg3ugjnt9B/mA8WQF2UxTPbEtAC4NZAJp7HVYgLUA34J1rYYFYWQLDZAVks5L0qrioLP9Y++BtrZRd+XpjDtf4rK79iW79LJDPfToJfS/PlpWlfkBVxwfcLBpp1wEGBAwG6BpnxZ+G8j+YWZMbH2rOu16wBtzuCLgD4eDFwns37nWu7ACsuBQTQN8bGF3wtvLEjTsMqJPiygw/2VPQXlKvsws+DfIeJp64fQlrenX2tpvE1oc+8IEJfiosQj2DgQEtAAMF/4fmbRbZAcwn0dQRhdwHE+Xd8G3CrAoBQlhOLngIyOFhSF9zK2J1X9kFoDUCWlFF1hB8Fnwv/ASzCoSDf998+Qn5+YVYNEn4Qnsoo/EaLwOMeUNAQ3QL4r2fgvz8ig4KYLRBZg/CmC7GHWXJ6rjxfjw1BFACUracAHlvN2kPVcg2CaE9+wTfcEGCFlY76FX1VRfi5v3+ATP5XV65nORubksnPzf34yi74OqaYgFt7nBnnwBSieyeBwgB9pkAcKV0Yvpbgckmw2boC+wHgpgdK0MvoEizjzUVQmzaZsF2rn8duxPVF//v6F5D1/fcxftFhwT7NlfEVflslF/6DJPz9V39BVXrOrOtJ+FHwL7CfX3a3QAJBZhxmDFxYQwAgME+XJYjR6gUyE8IRA7B6VgRadBuCKAEvszUggYAWttB+Bb9S78H7p+0G3nWBeDdrMeNnAibs3NNNNuvMqCpa37/wD1k7Q6vGI5O/imj9AnJNSo4NcNcgzkEgkBW/omjHTbHelkC5i4YMOwJZrDOowSEHALcS8NCBINB+BcmiRbkUugpn8R9K6r9fVXL80uzHmn27Vr3nX/j1glaC0FWw0KNAo6VSk54ryKwOXEMc4+R79QFCO1UTZsWtPZMdH20AgfKuI6CWYJ6egONkT0CTxaoAoJzlrFWBK7/g+xf+T9bMpyo+WbpbsvAniGPNCwYE/DcThNDfyAo2XskKNl3Ln8uuywEhu54GCrqUIcUICgQIABhYPGlCERgsTzxAtAWvJgBgcM8N+bQpiBLm8JYyq/9aftMfzX5ctff6yjXk6/My3pI0fwLXsJv/DxiEbtNfBQgkVCgI8N+qyTX8xr+wwm2N2PkD7zDH8XTmOreduYp+Z27HKeY4OoeAwPjfhCVAYBAnQCBuMhf8hGitarA8ICABAC5yP7IALFa7yaxcAAUAlUf4sbQXG3A8vWwby9t0J5XznitV+G8iobfnpTLnmR9Y0e5keHwNgMH1wgSPPBDw76/Ftf2Wv8F/GQvCftJ3qfOpLwkY8D/7+V8yMOguwDThbnr9TVksJI5lcwcSV+xHzR8rioJe7r72FE8DKgAou0CBj91t8T7W8PE+7I4HXmb1H3ql0vEdD7zE2o3/L0vC0m+xIWdlDvrJnH/2d0laqq+kgB/61GhSO/5YaGwAemwJK9rZEjTxVWSKe5ncERL+q1nRrq7MVfirp7GNq1g7t9uGEkCgpVICKEkQwFoBXj6cFddBFguVueNQ4uLD6AaIGID1SextZsLFQGYVAyg7AOSxrgt/ZXXu6cRqNriP1bqzJXCLSsItiWvWv5e1GmZhWPlpSj9Y6U3/tukn2byv3qea/tKEn4Ro83UgdF10fQM9PSndrkJmPzSRFW5toPnhPBgXFxHhL97zGPzmefFf7PRf6NxxmhXv7UVgxOMDpVkknhShawc9zgG+Tgh/2eMBcmNQOJqoIxDf+dRdUWmzYIJUVREA6rVMZrWbtCcgqHNPx0rEnVjtxu1Y6xHLBQDkVHq/v++qZeTzh7JUF81p59lNQvCcGhBoWhhM8eK9vUFIr9MChGH1+RGEfmzP3M5C8R8QhHinbFf+DrBE7ucxAXJHggpOagVD8F67KBueLzoLxVCBUFlWD5pEG2M43oc7nfA90MNrAfgIPWgdbeKBwGAvwqTlAD7L8mizRXrPUv6eqgQIBgBokQSC1pbVadqh0nHtu9sAACyrpADgaeiBK/qwVdeeH9pQpx590K9kYalFkfbzB/sbAECzCIRGduX/xN2FMKf6CkQJsuvcVl/hL9hF7gm3PmqFZH0UZMVpC4ng3Ik9BuD5hwzxgFCtAND4ojW49RbgYvRhw+UC+Gh8NDdxe+jVx/nkM+eQsHSe+yPrPGcH67rgFxD8Awwbk2BVYhJuVJKRV2UAQQFAOBSFJ+XXJv0Um7FhgI/pX6KgyCDg5htY0Y5moIHzfVqIe9hJWhq1dfjiAbVIs5/f/6Ym/BKECADObdGlBcu8ohCP0hXYV5Adf6WwBKLPbawbxX67pbyNQcvvAhiEFCeZEPxui35jrYaks7v/OYDdnvwPdnOrHqzuvV2JUWhu7fI0u/Ppd1jzvpNY29R1rOsXe8k6SF5T+QFBAUA4XEL4P+n7Waf0w6z38ix2YvMtVO0X+vr9BNKyzhOrvATRI/wUGDwyW/jhtcJSJ8A1eg2d9pebm7qE63GCFW65TUT848sJAnEO3mUo/iN9QLAglIyA3MwQjn8GtvKuQOVrCmLYJgq0PgputyX7WfN3prBbOjyqBaJqNWoFkxGEpEk7VrdpW1avaRtWrzE8d+d9rGaDe8lXvbnNA6zhE31YMwMgHK6UgKAAoGwC73EJcxnOv55rj7P2y84xy1ev0uq+oLW/P02872UR/LP73VAECfPy6DL45uFD5QRKMxb91EEn+F6b3cD/KNrZWov6lx0AKB7g4p2F4k7Ceby+QCh0AMiwxsD5Ft4ToOwrAr2FP3kV3MxJ/2O3de3Fhf6u1lowCo/1mnVgtZp0YDc06MT+entn4hvv7Eyv17unPU3Wmg3vp8+iQHFAeLNSAoICgLIJvLx33cD96zRtI2v87mfsgXfeZqc31WJF5ajvx+Kbwi23Mndxrk4YXbp9Jjznxb88pQXlygICWuQfrInzv/cxxh68QKD4lyd1hUmhrx8Q59IVICugICtuuIwFFGwJISCIG4QmytZgFtuq7nAzTLwpiLt8Zv9BMvlbDcsgYUatX6cZCH3Tjqw2TkJgFPAbGnRktzRvz3o925x99M7d7MO+jdnjT94H72vPbmrIAYKDRSdt8noAASyE1j11gPBlmVyGcLYUv5QBwG+GB6/50sAC32HqRnZf/7nsruf6s1s7P8lubt6R/fXmlmzyp3UZ+6k6O7tJmtVl1MiZN4LGbUE1AZoZ7nbqQEBoauc5Hg8gwSyrJVCbFfzwZ2bPHalL++mtDv5b5/e/HZLFoS9rlkFLEWjEoKALlw+D5j8GfFPIVgC2BZMbGsL5LFwQBEdHWQHAo/mPsTajV5OQkpmP6SdMi4Fg1waNXxeE/0YQ8Gd7N2c/r6jDHFtr0A1nP1Zn9i1xbGt6PfbAo/cTQJAl0EQ3iQ2A0Na/hfDWRB0g8KAi7eFGmQab0ELhBQVjGrB7JUwDdgpLGrDEdC5eUxR4URSlF3gTCfwmdv9Hn7G7nv+YBB7/l3b/7m7N4u9qz+7p0I4d+qYOO7+lfMt6tapALAcG7V60qxtznz/kBwR4fMBVdJAVbrtTmOdlCQqiBXAF1RlIADDuach/BysC8X0y7hDUGERZc+GWmz0g4OlA7BBpwb4iExBbuDk+6mxWjdIBoBsHAFkOPAzXA8DRXnb0zyGBw6j+zSAE3OSXwt+BBBkF+v9AsP/14j3Mtb0Gcf7meHYO0P4cHPPhprOdNej4GFgDCBR6EJDf5R8QvFyG1h5AQEDq8vnPPCC55gQxxTyklaDTVmSqhlibYCgEAkunZv3m/L9UMk64o1mphUCl1myk53hAlN6Xy10x+E60IvEcKyLbT/qW3ffhHNDwHwmB76TdH5wbHCQ5ON3cvAO77o5O7IO3GpMiOLep/I07tYh7dm3SugQCrqKAIOA8m6nV7odSLkzvo9+4gqr7POk/t89vOI4t5vUH2XW0OIC/3/GsI7iJiooQOPTxCt17nWwnAeXOouwanuXCwVYHSgCA42vYE4BbAKHvEix9PCwxxUg+BvLQ7NcLf12wAOLv6sCad2zNjn5TEzR/nDDzjHxmYzxz76jBfl1dh91xfztWs3EHsh44e5m0QQFCc7IW0DSv/+C/WJNXR7D7P/mctU/7ljITBAo4edeeoiNtkpKRZ0hhcnAQABEAJOj9oOnu/3g+TPzZ7H4wb+/rP6eS8Fz+fz6YzTrN3kb1F36BTo5PP2azrNvIJRcraeVRAaIn6TGOGb+z9fBlrNmbE9idT73N/tb+EboHgQQeQdJz3/i9rQX3eePCmxmDe4/KgDf4CNNSXBLQq1jxr8/5jQNIje04bhFrBoJbSuxJ64EF8H0Ms1sH+68/EIDjPLuZ0pS8JPkmEQuo6ZVJEDEFTFHC/3YcW8rjB7/+ncBA935cI0D7EDi2UR+BjiIWEBOk8OfQlsaiK9CDcm+AkLcIExOHTP8xa7jmN9xgfpNvbtaeXXt7Jzb4g7sY21WdndlkbN+kr/ZCYEBN8PqrTUkz4GcNrkAgH7ckQACrAMtiUQviEZ/7W9uHWP2HX2WN/zmQ3fvudNZ61ErWcUYWaXIcE2m21cc5OOCkR4AAASCQwLQpAgWts8/17HW3+oRmZVQ+PimE36oJNec8GhPOATTZPWM+SaBOOyQt2U/WXduxGwhAm/5nNAk7ave6zbuwWgi4aPlgGfRdbQIKvP4eSZew+p0dWbeeLcjyi0RzD0Og7uBHAYRUmunjRVCw5GXEHi1dgxYbnT/4ga7013drcwk6ztPfsPO//0eUJF/NFyqRaV9L/CbPYmD8wpX/o4hTnGGF25sSeOgyCB43gHYhip+gBQODSQd2ST+CC4FEUxDbPYlm0RU4hAVBRu1/hExuRH296S8BAC2AGo06sowptwU08+RjAgAAiekjGhAA1Gvm3wIIHRA68oAkHPE1tBIQDGjiki/aFl7vzG5u1Z3dnvQcWTONXx5CgcYWMOlbj1xBi2k6Ts9kXebvBgtiHwmG5vtW4nX2/oqz8L+juY7xkk6zt7P2k78HEF/LWg5axO7tN401fXUku6v3B2A5vcJu6fAY1WzgdaspgBTvNWn3xu18ADfgPQigGIZ+eJcu+BcJAOC9AVDoHIenG0xz70wBD9Zd5TdYZ9TS/0fPOY7O8xF2fztcGx7b/4DPzWfFex7nQUS0CsD6QOEv3vsMrRnQVg2e/lr7LZ8Kwax4l3M7nf8O55fLzUeLgqkMTLTItmC26sD5IlAWoguAmvIICEUWq9O8c4AbzgU44e4ObM2sW8nPRzPP/4ouAQAwGT5Lra8FA8sCAH5Bwfs5XZCMT1gevMRaBe43N9esBgQM+gyARN37TBRnuKXj4+y2br3YHd1fIEGp//C/WYNHX2MNH3+DVgZWFm7w6OusAfw3WhXY80V2W2Jvt8FgWAAAHBhJREFUdmunJ8kKQveobvOuHBhBmGnsAIgk5LSwqYUm6Jpmb9bJjzlfmsAHnhdfz/ubNi/CYf6XHFS7gTlPrvETsCs5PegBA77gp3B7E4odeCwKVykWgFu8z2kAA1wxaM9LYUU/tgE3YqDP6sHi3170/BdD9aNnnUBRNl23lvrOQUGlAgUA/AmYdggiNyBIEJCaBE3F5v2m0mTx1gDyRqMQX1+/E5s9uj5p97ObfBd3GFwAeM+Ijxqxv97GXYBwAUBQloIeGJp10qwG+V4CCXApyIIAwUCBqdXIs/qvZsMWlTAI6LU6EP8zCjWMgcYihZvGrxv7PZ6xB3XdQhB+GRdq1qENO/Yt7q4b2d5++uAaduRx5e/0YwmUlB4U3X02XsmKf34ItPhRn6CfzP/7swCMQOAKGCzkws/dCeeZjSVWD4qMgOghGPeBqAysVhxMJoBag5lzJAiswShuYgi1APrgX6Ne7wYw/3UZAACAZ59tTkE+jwUQZ/D/83XnpgdasJvAP6x7T3AxgAoDBwN3FAJTBblpx3KOvTzX1TMnnnuuOQWFK6Kxp2fV3vWkwd3nDweXHsRAovT3D7zn8143cwc0/wOBgYddupJll2aV4BLmoh/bisBkzZLiEbJhSAZZANnx0UHFAbA1uEn2BbDYJvDOQMGnAjULYPVx1uSVESzhtqYUEPKvMTjixzXqwDKm3sbYzzdRxF+m//KF6U/af89NbPrIBpQGrKuZ/+0rZXGN4rJbAGjZoYU36uNGmlVYEZ19Pev2rxHpweJS0oP8vWgBOI7O9bUW3P6FP1AJcmD3wEUlw5obsvcZEfkPXDjELQCZCYizguK8IqTVgYlmq+wN2IeKgbA7cEiBwByKLHf+7Ed2a9dnuL9MmYAOBncAfe+6wt/D9N5ajAVgARD4fYj+jm01KDiIvHDCHST4tUQK8EJpf8WRBQAZGDZP9gSGI+H/BwYBmR58PkB60KF1FOL+/uZS/f2Agq01KHHqHsvXnEbz336MGoqUJvz6fQd5DCDeDnyHbBZyPrtWaRbAQU97cLMtCVcEUk8Ac/AugL4ICNNnuPAHV/YhCPAccBtWR6uM6wSC3QFAoCPl99/4d1P25exb2N5VddielXXYium3sRf/2QysBP56XU34lfa/GAEA14KgFbDdXFcrCqvI3v6G9GCOb3qQ6bW2s8Bv+tDH3/fx9Z0sWEK/3/HHFwA2dwuLI8i+AZmGeoAHZTowf3P1UqoBM3IxEBgtAoJ1QPiLqDqOFwO5Q0st5VA+GfPgmBZrM2olu/sfn9IqQAwwIRjwHHFrWgWIk+D6Bl1YfOPO7Lb7O7Bb7+vAatzViQKFCBLItcPmpyuujACA1mDDVm3Z4a9rauW/F6Znf2npQbcfF6G0QJ9LsxKcJ9dSc1JcK+A88x2VJWO/AmTX+TyqDbDbRlAWgDcwvUG3f0AwawbEZiI/Uz3A6zIQGPQeAfyYexmc/5K88ijWArhCCwR6Nf/AgphVx4gxz9xu3AbW/O00KhzBfDKm0Sil1rA55eDj69/PEhq2YnXubs3qNW3Lo+wUbW/vG2zzDrp5RekVKFQBptWgnVjc3V1Y+6TWFAsqyo67IDv7+KQHT60rBQTcQQi/ByjshyaJkt5rRAVgdVaYfTMr3NqQc/bN/HXcM0AE+8rUuRj3ENhLRUIjRZ/A2KJgVgbyPQJkdyDbF7RNGF8UVM72XzlaQxCsLtPqxJfsZx1nZFPp6L3vTmNNXh4KwNCX8ui3tH+E1bs/UQsk8mKdtuRG8FRbK13KrSXP09dvTrl6THNRSku/EEcBwoVbeegN3oaKzJasNoD/9fWaswcfaiKbX16wrb0MVX2ZccamHkFE9v2l8jCSf/731yh/L10NT/OR6nyjEOLqWm1BSesDSnUBMqUFEDdLxABigsoEmDJwmzCxKMhifYdvE2ZzmMrYHszvYhK52EauFJOLR7DcdPVxrTy12+LfqT1Yp1lbWfu071jbsevJlcClxS0HL6UKtZaDFrMWAxeyFgO+oNVlzd+ezBoDiDR47HX2t3YP8Uo1jD3gJCNXo6Mxn31PR19rQnH4WG+ZCRD3xIPAwmuRzO7o+RJr8sLHrMFr01ifcf2YPbv6Bdvbz5jf/wsrBlMd039aQLAkAPCxDET6sNjGinYlimrCQCXFCT6NQcrRlITvHYBbjGfxXYRwaXBBVnzIHYLbUn276BBsClOLMN+VZTm6FXgHjbXpy7zq0oUrQf0EDczr2zUQgf+NpbntJnzN7ukzjtqOYWUiWguGijYqgFEcfhYFUdIyu4OviEStf0unJ1jjFweR1Ycl1Hive6w6wjqucbAh//2CNvzArb4uTAxA+NqbrqYSYKbz4YPJ5fv4+6f/xwq3NdSCeBW2LVlmnJP9RDsIrZXlwIXB1QJ4tgqH49Ug9IdQAGmfgAvWJjxHtzJNt/zUH+tBhNwNvloNv7vjzGzWcuAids9rKazRs+/RasDbTL0pS6E4/Ewl0T1eZHc+2Zc1+dcwWoWIy4LR7ZMgLvsyJJn3szZLjrOha6aKzr8JFyYDgKvzwAx3HJnpN7+PJT7Bmv/2w9O4P09BvFoVvBVZPAEAHP+Lssz+iAqlO5AV/X+RDbAupqXBlXy78IAgIgCDJhmt5jvB4w98taMAjQOKI8IciDGdzC00cd1xO3IJ5OI+ya2+cbffigQAYz3/NVTph5H5YPP7fi0A51mwHvqCyX+1waqoyI1JqV34T9Qi7CtyAf5XK/gNQ16augPNf7E02PYimtXYH1DsFeiuUht0+OtDt1S3rp04V3HE2LuPQo5fsEYAaJd+kg1cOyesLoC/1Xv+/f2rKDXn0voGll7P7wsATi3Sn/9dlGj0YdypyHchUaRcgHjhAsSvQTk+h41BgrUAAKH1+wTUwjbhvClG8EVBlY5D3I1IccVuQy53//lw9UJ23rD7T3kEvqYu2u59Hu/l77+pM/Udpeb3SyrpxfLd4l+e5iv2EAToN66jQKDMLkQUBDLFgqDdBABLRRowOngAwFQgLQySewXYzD1ww1CzVcsGVP795BVXJU6y5LAO6cfYG6tWBb3tV4nmPC3UuZZac3H+i+ectgGL1/x99NVDqec3BvucXmk/l+YG0OpB/F34PbmsF7sE8T6AkXMHCnj5tFgRGD9d7BEQE9LGoQ8uYhgQlBuG9uyOFX1mqwtMObe/JpqVvQGG4soPALj19/PLN7IzmXVYUVaNoAGgwBDBr6417yja3Z0682BzTgzq2Q9NgMfv8y3C8f3bGoG//61P5L60en7v4p5AawZcRftZ4Y5m8NszDO89v/8tsSVYzUi5AO4CWQiUGT9ULAaqlh/KnoHYIqzbkv28W9D0ndHgv2WKtlBOaqKJFYK0e1CuHx9PgYPi0PcC7GrOYw9l7GVHNtX3uAEhBfH+Svvt2XM+Ya7CvSX67Lgxp6voQHD+fqD8ftFBWgrsdpzxAwLSEvDaksxVCJ95u7wbgpTqAlAdALkAca+KOoBqoW0UYs6NqnFLs6gGD71CVsCtXZ4eeVev97D3m/3+j+ZROW+X+bso2oupHIquU8vtY9QRqIRGmm4BEG7hToijLr5gtpY12Oj2NDGV3yl3ObZif0MXb3VmdfLqRlzpSNkNh0kwPG834RJos+KQ2KK7bnQtaRUpXWMTXWOr08Q3mnHxJjP8fps89web0LrBEnD/9H1H5swqPRPgXbuPTTlchfv0kitMdLsQcrsfzR1qPb+noSf15fs+ijr0+LcEXD6fc+Vv56nBzBvDuA+hXwBwi30CkjQXYEuIG4bWbdEzqlbD+wgAat3VelSdu9pgEY0dCzqwogvbYN3a+SlqMdXkX0PZve/PpD55Hadt1hppJlIK6LhWoIPFPEnLD7s9DTRtovkoCaCYQFY+cSw2zDw4+VoEq4sLsc3P0YaC7RLvpcmHLc1Nsq8hNbmE/4E1AdSumoMVpjd7fHmGYbVjj3VniXuuB16nuEy8/qx2Hfk1PUPXGO89pl67Y8EWv/+aghD3Du+3HYTf0SH9mHPtN8+5WPbV7nN8F2B3qYU7GMTb92+DCa5fYus/cBecye+vnt9x9DMe2KPGIHWpbt+e82nAdQLe3+E89RX56bITcJhBgIS/OJusp2LgenLD0NPf1Q4NAGo17RJV554OBAB1mnYcVe++bljSadfq8rGOG8s6ZaVXA9lIsxNt9nl78vNUBIKNNLFFWMvBS7Cc191p5hYECER/O7oQOClwouBeBNiEBIWSTxreeZcmzYqjvBoQqwKxHTUdD2tVgsla99qTQpDP8UIT2ubcVgQT7AT83l6YbJlwvh6Oy+C4ECyAOfCe6fCeqcCT4fk0OKYlKg6Z6bqZ6RyupXUanM+Ca7wArrsFjmvhue/htV3AR+C8AK69C9vOyfv1wJfHWbuVTjbzm5GMZV/lxr0AA1kAniYeV3u193bo1tn7b7oRSpce76wAxhA8nXtrCheF1xDYD43XaXx3gMyBAIGTa8QagOphBQFqDZ4ZxxuDZsb9BvynkDcK1QCgcScQ/PYEALWbdBhVr3kXXI9v92mBZWgKKRtptqGyWw0c6jfnm4A2ae/GxT0AEIUtPl3Qvvu6My3ANXgcJsOrMDH6w6RJgckCQmnNgAm1wYQCa7bthse/A9vg8VESZovtGByPwuMj8LkD8J5dcP4DHJfDhJsKr/UH7gXf2xomWz2qaky3/kkWOCmqeOq0/gBmlC6D+3Il3JN4uE/NgB+Ge9IXnh+XbDmwtE36qa8/WTNv73m+HsDNl7bGuwPt9FO0o7nWMVffPSeQNVBaQU8gfx+79hbveVhXz59gXDmIG3ZYhwQBAJ7vdJ5YBmO4UYBJQvhAIDNeLgX+QgQAowtCCQCGBgClNdI0doxFABCr+gr+GnvZjaW3K8+NhgmCk+Zy4CtAyK+C41/E8So4XgmT58/4npYLC4MaVxdzLlU7wmejcd0DTMKYRMHwfCwcYzEDojh4xlZyeN1M/ByupQ2vZUw3uMbYbdoklpkHQ7u/b1sdJuwJ3PEWji7e7dZ7otckrYvdebjwF2nC5zg8jdbUe0fpZbAvUMAvoL9/Lpv7+6Ijj3HZcHUy5dEt8HEnggAB3OiDtizTgUk5hV/fC+BN2QvAnh0XWQAIoUGHWzSfLKjXsjv1KGo9YkU1mCTVcBUin0AolLbopPS9If9nUcYcg9+XyIUZJ2K06HdI/Q4SLfojX/tgyrCJDVJz+dGSqzgkxuuXK66rTd4HusZ03S1W/pzFJs+jEShMHDTw3se+vnJNNNsaFS201gqKYsNk9q/9r2dFP7YT232L3L39OCv+5QnamBOFsuinzsyeN465ivb5goHf1J7vwh/HHws8TUO9OvLIGITz1H911oazRLfDLwj88bmuSjChfKsAM3nMBN0AEPzGAgBiymSyhQsAvNgtjgUABDV5fKED3fTuK456BJMmiY1vWqp/TptU+qNNdDQWR3i+SzpPYXYVXY4VVT5KthyO6pzxm9aQ9tGM3VEHNzatJoJWbwgt5hB5bbdx880rmd023JPWO7cV3IFmovquNhfQTddxkz27Live24u0rSdlFyjw59L5+x9RarEkPx1NeO88f2mxB38twhxHZovagPhygQCuAXDvoONPBVv4/oAFoewPeCEBQJEiMPejxfEW4GJsbuk3DoDdek5/LTTofB8trS8F5lWBV3MB23qHzlx3+bcAnOfERiBXBuzI47ECahBIOE+uZq7C35j9UJrhu4NrEirWEByeKvYdKBMIuAVQ8q3BsrQCoNj8sgi/AgBFFU2oqTBajR1sReR6nWhq4SjQpQMpfbblb9Row24dxIXbj5b2WReQXYfKcIt/fiDAjj0uUeDzu64zT0Ip+wEm8Jz+lltZ4fbG4H5czhzHM7y6AQXeHMR3IdF4EWsIrRsQvz5xbk/WJK55SLsCKQBQVBnozNbaWLUWK9yAZzkAxDmN/i0CwG0kyHyLrIRSNaYndnAjK9rZUtf7348F4DgNlsLtJe7A4wsC1T1pvS23aAVJxl4CrNR24QQCuaNDBQEBjloTkO/x+uVnJtB+APllSQEqAFB0Iej8pupRsnUVTOqrYQLnYE4bji4BAh7TG7fMDnFRDQePWyhgaPD5dQLotp+g9wQDAMbfTtBKkmmDEd3uPiGDAC4aoi5CNYMs/vGsAITr9w/N/N+cEMV2N1QAoKhqUH5WQlRBdnXqYy/cgE/EPncOXaRbJ3ChraiTBTzaVtuiz59e+FyFv2hbf5Vrb4ED7xr2DiipBsGYfuTn53/7Z+kgQGW/JPwuDpTx++HxVdKlOr/1xrLfDAUAii5YMDArTqYD40CjHceaAJjcrgKdK1DW5bR8N+C1fjb2kAU6K0RAsTyLdWqSJeA4tjioeIC/akFcrESlxiUAUYEw/wtk7j8r/m3hPsUWggtQpgIgBQCKLnQwkGcCeCwAjgNFZNvuKXYph2Bu/AtzHJnlI5jyHJcQ8wxArXLuLXATrU5EiyKYeID3WgW+H2CvkqwAEROJl6W/OQWb467mllN89N78ct4IBQCKLhQVfxtHrawFAFwLJq6NT/J4l9b1pkwAIGoItLJdh0HgsE4A9/3DYGG58vHaWoVrWdFPnbTtvYOJB+jBiGIBP/yZ9i308xsy+Cd2A45/SbhNsSKGogBAUVW3AuKlFfACD3DFOfjed761AaUJJAklmtQ/XAb+9ctG/1ysI6CdeyizUDO8ew3ufyukeIAGALbhlFr0AwBure7/R7KONnuuXXxUwaYa5b8JCgAUXUjCrayon/1mDQw2YFoQ210JzecOuVUYCDemAV35PxnWCGgdfLbcKqL/CWFcpivWLfzxuR+3wx3AAuDuAi5z5oBUy5DzF9qfjsVb6PkWQvhjwqL9FQAouuBWgMhfYzMLYQXcAeeFOOGx1l1ugxXcTj8JfOvvvc8aOvhgkxBe/VfIinZ10Vp1hW9lnqdOAAuRXAW7AoKA91oE7o401twR/Xp/8d120fdvhPD7Y/XWkwIARRcBCMQbAoIw6V8W/q6DKt+4FeAueaefm3hjTttQ3dbbxbq8/zHqH6jfgjsiOw5hPIAWMBVp+wV6L1MmUJLuSO4YURBU05jv59F/BxX9ZMVnF2TVFjX/oow6HNpfAYCiykBYyVawuQZN6gJPUHAeZQVAA2pNMLKMqUFN86JGB83rOJ7ud4ku1vDzpb7XRHT3HkMDk71/99lPQL8JCa1vOLHcz8pDLeXnxHZfMO5zcH67EHoJAuG7+LUadww7ANQWAADHgtoCAGorAFAUjBUgagOKsuIvB9N/m4gH2PWLYYwbcdxIGlc2/9SEznGSBIyWDuMy3AraustjCVxDnYmdZ7N8A4BgjaClwncmrq6PRUjhp4pIWvGXGfeQiI1Uk5rf/XXd8F34mncbLICROgBwh8kCSFAWgKJgLQGh4aQrUAuA4ZB7Z7xcMiw3xDAsGiraZaK8/vkD77Dzv/dhxXseZYVbG/I9A0jrJ4Q54BdEJkK4A/z/daNNSbDVWPHe3vDf6uu2FPMRfvT/nbxPAi/48WRJ4sOr/f1YAKONFkB7dyhAAJ+j93tZALWUBaAoqIzA5gTNt9UtFmoMfIZKYDPjNBAo4Cyq/q4XG4JcSUFAvr7/Rm1LsArbrdePJaDvWUD/j3oN3uT9v9ye1X6i1VdW3ChhGUUXaMAYF/6LXpsDQDWhpT+qd29XFOTCOk3a22uXkeF7inlrsA5najfpeK0AFwUAikq3AjLjtC2uZZ97AIAWICj5Lj0IaGvj47QFOsZtwRIuiOCXtIDIuGWZVuTjMftxu28e95iI4z65rZ5WKBUR4ddAoGn7aHGsAwKcgyCAlkC95l3LyF2IAQgGCuGPgXM1uxUFRflUF1BDugPVBBg0Bz6JBTGFIjBoXCZbxTgzThftj3PiY9T88HiMJy5SEcIPFoDeRAdroBZwPwCCwcADgQeFyAPFZx+Uv1GniRJ+RSEGBXlGwAgCWXF3gIDs423E4uy6rIA72IKhSsLa/8VUHy6CojhHVtx7OktIZkOi2G+3RPZi1xbaOdx+eu0mbTThB5dCzWpFIQcFseGFVxT8Bnh+AxXH8DUDTk2oMis9CHiyGLyzr51KfDPjikD4n5CC79H88VHnfqge+QtdF4RTggBo/2iMCYDJXi4GCyC2TpOOmgUQ17SHmtGKymAJePa8LxTZASEco1w74plYH2+XqwdLKhq6oIJvBCcnNj8Rqx9/hNcayWh/gSf+EcV+qFmxF7vuHRwE6t3eOar2na2jajVqRcfajYLnWnfCZxq3pu+pWbtFVN32SvMrKr8loAOBGN3zSSAoVu47U1bAYXALKoNFkKkrYOIWi4PtFMCVGT8BHl8uLZxTWdUjF+1XpKhKg0B2nJYDx3JYWSsAgnMtCP7k81viGe+VF+/EPLowsf0UD1WsqU+WCQg+ghNW9olA308ATp09/n68trS3MFMJvyJFfslNIMAFxLHrKk1wCBQy41uA8HyNPrXwq0noCrMMhUORBgPZusvNV/MhGOkEPzP+GPzHdwqzalwmNH2srkV6+It8FCm6WOMCsnQYC2UKMw1uwQMgiBuxZgCr6WjPARBCEkZ96i0zPLECXSpP69uHtQrY1ARLecXGJyD48UOAq+vGEOv0BDij8jNvVDdWkaJgqTi7umf9AO8yHKPvjQdC1RWE3AKAUIjBNrQKirgfjsLpgPe7RI99z45EmSVbCIbNS0TDEg4qFNSzo/A7tnGhd1Edf/zPwO8U6AQfrZZCXWVfkTL5FSkqR2wABKggWwsQUqusgs03ROksAtx96D0Qwo3oEqBVgAKKQTi0DngrchJeeyEHBkwrunhz0jhXgTjHKj1esEMbmNjFPgaMYg/odvySIAN7efDeWfCdifC/qnk0frzO3E/Q1j0oUqQoHECQHUeCxYWe1hTEyt2HdGZ3QwCC/4AgLgKB3I999lBTo/CSlbCLWwoyvYjaHI/oTmChDgYZETzY3pr03iLuSpyG7/oOvnsEsAl+8xrD/8rC1F58tF2070KQYovV/VKkKCKUvzk+qii7RlTut/XFFmRx0bh5hg9gZMX/uZADwmMACB8ATwFeAcL8A7y2G/h3EGgrPD4A53tBq2+F71sP75kPx2FwfAleawPnN/jGKOJj8DcxqIf/h8cqlMZXpKhCydNpKF6WFuPKumqy54Dfz2yrieBwGebn4b1XFBBQxP+pMLN6TCm/FUtRfV0qD4W+SEX2FSmqBC7CZu4eFH9bi4CB4gVZVHaLJno1OI8pyC65yy5G7fEzWLRTSJ/BwCN+R7yWnsyHc7ZbRfQVKar8oCCEtngLbVOmWQqFWRpAeB5nxmllyVo7czDvz22roS6kIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWKFClSpEiRIkWVh/4ffASssJgd6xcAAAAASUVORK5CYII=" />
        </x-slot>

		<div class="row">
			<div class="col-lg-12 margin-tb">
				<div class="pull-left">
					<h4>
						<small>
							<a title="Voltar" href="./" class="btn btn-primary">Voltar</a>
						</small>
					</h4>
				</div>
			</div>
		</div>
	
        <div class="mb-4 text-sm text-gray-600">
            <p>
				<b>Esqueceu sua senha?</b><br>Digite seu email de login e um link para resetar sua senha será enviado para você
			</p>
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

			<div class="mt-4">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="display:inline;">
				  <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
				</svg>
				&nbsp;Email
			</div>			
            <div class="block">
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Enviar link para trocar a senha
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
