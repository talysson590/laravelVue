
## Projeto Teste Talysson Fábrica Info

## AMBIENTE LOCAL

1º Edite o arquivo .env com informações de conexão com o banco

2º Execute o comando "composer install"

3º Execute o comando "php artisan migrate:fresh --seed"

4º Execute o comando "php artisan serve"

5º Execute o comando em outro terminal "npm run watch"

## Questões 01 à 04 estão:
app/Http/Controllers/TesteTalyssonController.php
app/Utils/AssinaDocumentoClass.php
app/Utils/TesteTalysson.php

## Rotas da API
+-----------+-----------------------------------------+---------------------------------------------------------------------------+------------+
| Method    | URI                                     | Action                                                                    | Middleware |
+-----------+-----------------------------------------+---------------------------------------------------------------------------+------------+
| POST      | api/document                            | App\Http\Controllers\DocumentController@store                             | api        |
| GET|HEAD  | api/document                            | App\Http\Controllers\DocumentController@index                             | api        |
| GET|HEAD  | api/document/create                     | App\Http\Controllers\DocumentController@create                            | api        |
| PUT|PATCH | api/document/{document}                 | App\Http\Controllers\DocumentController@update                            | api        |
| GET|HEAD  | api/document/{document}                 | App\Http\Controllers\DocumentController@show                              | api        |
| DELETE    | api/document/{document}                 | App\Http\Controllers\DocumentController@destroy                           | api        |
| GET|HEAD  | api/document/{document}/edit            | App\Http\Controllers\DocumentController@edit                              | api        |
| GET|HEAD  | api/documentType                        | App\Http\Controllers\DocumentTypeController@index                         | api        |
| POST      | api/documentType                        | App\Http\Controllers\DocumentTypeController@store                         | api        |
| GET|HEAD  | api/documentType/create                 | App\Http\Controllers\DocumentTypeController@create                        | api        |
| GET|HEAD  | api/documentType/{documentType}         | App\Http\Controllers\DocumentTypeController@show                          | api        |
| PUT|PATCH | api/documentType/{documentType}         | App\Http\Controllers\DocumentTypeController@update                        | api        |
| DELETE    | api/documentType/{documentType}         | App\Http\Controllers\DocumentTypeController@destroy                       | api        |
| GET|HEAD  | api/documentType/{documentType}/edit    | App\Http\Controllers\DocumentTypeController@edit                          | api        |
| GET|HEAD  | api/products                            | App\Http\Controllers\ProductController@index                              | api        |
| POST      | api/products                            | App\Http\Controllers\ProductController@store                              | api        |
| GET|HEAD  | api/products/create                     | App\Http\Controllers\ProductController@create                             | api        |
| PUT|PATCH | api/products/{product}                  | App\Http\Controllers\ProductController@update                             | api        |
| DELETE    | api/products/{product}                  | App\Http\Controllers\ProductController@destroy                            | api        |
| GET|HEAD  | api/products/{product}                  | App\Http\Controllers\ProductController@show                               | api        |
| GET|HEAD  | api/products/{product}/edit             | App\Http\Controllers\ProductController@edit                               | api        |
| GET|HEAD  | api/teste                               | App\Http\Controllers\TesteTalyssonController@teste                        | api        |
| GET|HEAD  | oauth/authorize                         | Laravel\Passport\Http\Controllers\AuthorizationController@authorize       | web        |
|           |                                         |                                                                           | auth       |
| POST      | oauth/authorize                         | Laravel\Passport\Http\Controllers\ApproveAuthorizationController@approve  | web        |
|           |                                         |                                                                           | auth       |
| DELETE    | oauth/authorize                         | Laravel\Passport\Http\Controllers\DenyAuthorizationController@deny        | web        |
|           |                                         |                                                                           | auth       |
| POST      | oauth/clients                           | Laravel\Passport\Http\Controllers\ClientController@store                  | web        |
|           |                                         |                                                                           | auth       |
| GET|HEAD  | oauth/clients                           | Laravel\Passport\Http\Controllers\ClientController@forUser                | web        |
|           |                                         |                                                                           | auth       |
| DELETE    | oauth/clients/{client_id}               | Laravel\Passport\Http\Controllers\ClientController@destroy                | web        |
|           |                                         |                                                                           | auth       |
| PUT       | oauth/clients/{client_id}               | Laravel\Passport\Http\Controllers\ClientController@update                 | web        |
|           |                                         |                                                                           | auth       |
| POST      | oauth/personal-access-tokens            | Laravel\Passport\Http\Controllers\PersonalAccessTokenController@store     | web        |
|           |                                         |                                                                           | auth       |
| GET|HEAD  | oauth/personal-access-tokens            | Laravel\Passport\Http\Controllers\PersonalAccessTokenController@forUser   | web        |
|           |                                         |                                                                           | auth       |
| DELETE    | oauth/personal-access-tokens/{token_id} | Laravel\Passport\Http\Controllers\PersonalAccessTokenController@destroy   | web        |
|           |                                         |                                                                           | auth       |
| GET|HEAD  | oauth/scopes                            | Laravel\Passport\Http\Controllers\ScopeController@all                     | web        |
|           |                                         |                                                                           | auth       |
| POST      | oauth/token                             | Laravel\Passport\Http\Controllers\AccessTokenController@issueToken        | throttle   |
| POST      | oauth/token/refresh                     | Laravel\Passport\Http\Controllers\TransientTokenController@refresh        | web        |
|           |                                         |                                                                           | auth       |
| GET|HEAD  | oauth/tokens                            | Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController@forUser | web        |
|           |                                         |                                                                           | auth       |
| DELETE    | oauth/tokens/{token_id}                 | Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController@destroy | web        |
|           |                                         |                                                                           | auth       |
| GET|HEAD  | {any}                                   | Closure                                                                   | web        |
+-----------+-----------------------------------------+---------------------------------------------------------------------------+------------+
