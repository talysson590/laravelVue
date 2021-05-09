<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <router-link to="/" class="nav-item navbar-brand">DocsOn</router-link>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <router-link to="#" class="nav-item nav-link dropdown-toggle" 
                            id="navbarDdocument" role="button" data-toggle="dropdown" aria-haspopup="true" 
                            aria-expanded="false">Documentos
                        </router-link>

                        <div class="dropdown-menu" aria-labelledby="navbarDdocument">
                            <router-link to="/document/" class="nav-item dropdown-item">Listar</router-link>
                            <router-link to="/document/create" class="nav-item dropdown-item">Cadastro</router-link>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <router-link to="#" class="nav-item nav-link dropdown-toggle" 
                            id="navbarDdocument" role="button" data-toggle="dropdown" aria-haspopup="true" 
                            aria-expanded="false">Tipos de Documentos
                        </router-link>

                        <div class="dropdown-menu" aria-labelledby="navbarDdocument">
                            <router-link to="/document/type" class="nav-item dropdown-item">Listar</router-link>
                            <router-link to="/document/type/create" class="nav-item dropdown-item">Cadastro</router-link>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <router-link to="#" class="nav-item nav-link dropdown-toggle" 
                            id="navbarDdocument" role="button" data-toggle="dropdown" aria-haspopup="true" 
                            aria-expanded="false">Produtos
                        </router-link>

                        <div class="dropdown-menu" aria-labelledby="navbarDdocument">
                            <router-link to="/product" class="nav-item dropdown-item">Listar</router-link>
                            <router-link to="/product/create" class="nav-item dropdown-item">Cadastro</router-link>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <router-view> </router-view>
    </div>
</template>
 
<script>
    export default {}
</script>