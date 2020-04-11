<p align="center">
<img src="https://www.demi.sk/email/logo.svg" width="300">
</p>

## Demi Box - Úvod

Pripravená "krabica" postavená na frameworku Laravel v 7.X, určená na vývoj menších a stredne veľkých webov a e-shopov.

Obsahuje predpripravené veci:

- základ administračného rozhrania
- autentifikáciu
- AdminController, BaseModel
- základný setup pre public storage
- predpripravené viacjazyčné routes
- [Laravel link](https://laravel.com/)

## Demi Box - Multilanguage

Obsahuje pripravené multilanguage routes. Takisto obsahuje predpripravený LanguageMiddleware, ktorý prepína jazyk aplikácie
podľa prefixu v URL adrese.

Ako spojazdniť viacjazyčný web:

- je potrebné odkomentovať LanguageMiddleware v App/Http/Kernel.php
- je potrebné spraviť prepínanie jazykov v menu
