<template>
    <div>
        <h3 class="text-center">Cadastro de Documentos</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addDocument">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control" v-model="document.title">
                    </div>
                    <div class="form-group">
                        <label>Tipo</label>
                        <select class="form-control" v-model="document.document_type_id">
                            <option v-for="tipo in tipos" v-bind:value="tipo.id" :key="tipo.id">
                                {{ tipo.type_name }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea class="form-control" cols="10" rows="5" v-model="document.detail"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                document: {},
                tipos: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/documentType/')
                .then(response => {
                    this.tipos = response.data;
                });
        },
        methods: {
            addDocument() {
                this.axios
                    .post('http://localhost:8000/api/document', this.document)
                    .then(response => (
                        this.$router.push({ name: 'document' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>