
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

Method    - URI                                  - Action 

POST      - api/document                         - App\Http\Controllers\DocumentController@store                            
GET|HEAD  - api/document                         - App\Http\Controllers\DocumentController@index                            
GET|HEAD  - api/document/create                  - App\Http\Controllers\DocumentController@create                           
PUT|PATCH - api/document/{document}              - App\Http\Controllers\DocumentController@update                           
GET|HEAD  - api/document/{document}              - App\Http\Controllers\DocumentController@show                             
DELETE    - api/document/{document}              - App\Http\Controllers\DocumentController@destroy                          
GET|HEAD  - api/document/{document}/edit         - App\Http\Controllers\DocumentController@edit                             
GET|HEAD  - api/documentType                     - App\Http\Controllers\DocumentTypeController@index                        
POST      - api/documentType                     - App\Http\Controllers\DocumentTypeController@store                        
GET|HEAD  - api/documentType/create              - App\Http\Controllers\DocumentTypeController@create                       
GET|HEAD  - api/documentType/{documentType}      - App\Http\Controllers\DocumentTypeController@show                         
PUT|PATCH - api/documentType/{documentType}      - App\Http\Controllers\DocumentTypeController@update                       
DELETE    - api/documentType/{documentType}      - App\Http\Controllers\DocumentTypeController@destroy                      
GET|HEAD  - api/documentType/{documentType}/edit - App\Http\Controllers\DocumentTypeController@edit                         
GET|HEAD  - api/products                         - App\Http\Controllers\ProductController@index                             
POST      - api/products                         - App\Http\Controllers\ProductController@store                             
GET|HEAD  - api/products/create                  - App\Http\Controllers\ProductController@create                            
PUT|PATCH - api/products/{product}               - App\Http\Controllers\ProductController@update                            
DELETE    - api/products/{product}               - App\Http\Controllers\ProductController@destroy                           
GET|HEAD  - api/products/{product}               - App\Http\Controllers\ProductController@show                              
GET|HEAD  - api/products/{product}/edit          - App\Http\Controllers\ProductController@edit                              
GET|HEAD  - api/teste                            - App\Http\Controllers\TesteTalyssonController@teste                       
GET|HEAD  - oauth/authorize                      - Laravel\Passport\Http\Controllers\AuthorizationController@authorize      
POST      - oauth/authorize                      - Laravel\Passport\Http\Controllers\ApproveAuthorizationController@approve 
DELETE    - oauth/authorize                      - Laravel\Passport\Http\Controllers\DenyAuthorizationController@deny       
POST      - oauth/clients                        - Laravel\Passport\Http\Controllers\ClientController@store                 
GET|HEAD  - oauth/clients                        - Laravel\Passport\Http\Controllers\ClientController@forUser               
DELETE    - oauth/clients/{client_id}            - Laravel\Passport\Http\Controllers\ClientController@destroy               
PUT       - oauth/clients/{client_id}            - Laravel\Passport\Http\Controllers\ClientController@update                
POST      - oauth/personal-access-tokens         - Laravel\Passport\Http\Controllers\PersonalAccessTokenController@store    
GET|HEAD  - oauth/personal-access-tokens         - Laravel\Passport\Http\Controllers\PersonalAccessTokenController@forUser  
DELETE    - oauth/personal-access-tokens/{token_i- Laravel\Passport\Http\Controllers\PersonalAccessTokenController@destroy  
GET|HEAD  - oauth/scopes                         - Laravel\Passport\Http\Controllers\ScopeController@all                    
POST      - oauth/token                          - Laravel\Passport\Http\Controllers\AccessTokenController@issueToken       
POST      - oauth/token/refresh                  - Laravel\Passport\Http\Controllers\TransientTokenController@refresh       
GET|HEAD  - oauth/tokens                         - Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController@forUser
DELETE    - oauth/tokens/{token_id}              - Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController@destroy
