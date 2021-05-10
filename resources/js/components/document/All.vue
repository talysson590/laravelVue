<template>
    <div>
        <h2 class="text-center">Lista de Documentos</h2>
 
        <table class="table text-center">
            <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Nome do Arquivo</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="document in documents" :key="document.id">
                <td>{{ document.id }}</td>
                <td>{{ document.title }}</td>
                <td>{{ document.file_name }}</td>
                <td>{{ document.document_type.type_name }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'editDocument', params: { id: document.id }}" class="btn btn-success">Editar</router-link>
                        <button class="btn btn-danger" @click="deleteDocument(document.id)">Apagar</button>
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
                documents: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/document/')
                .then(response => {
                    this.documents = response.data;
                });
        },
        methods: {
            deleteDocument(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/document/${id}`)
                    .then(response => {
                        let i = this.documents.map(data => data.id).indexOf(id);
                        this.documents.splice(i, 1)
                    });
            }
        }
    }
</script>