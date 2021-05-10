<template>
    <div>
        <h2 class="text-center">Lista de Tipos de Documentos</h2>
 
        <table class="table text-center">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Tipo</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="documentType in documentTypes" :key="documentType.id">
                <td>{{ documentType.id }}</td>
                <td>{{ documentType.type_name }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'editDocumentType', params: { id: documentType.id }}" class="btn btn-success">Editar</router-link>
                        <button class="btn btn-danger" @click="deleteDocumentType(documentType.id)">Apagar</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                documentTypes: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/documentType/')
                .then(response => {
                    this.documentTypes = response.data;
                });
        },
        methods: {
            deleteDocumentType(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/documentType/${id}`)
                    .then(response => {
                        let i = this.documentTypes.map(data => data.id).indexOf(id);
                        this.documentTypes.splice(i, 1)
                    });
            }
        }
    }
</script>