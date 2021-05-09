<template>
    <div>
        <h3 class="text-center">Cadastro de Tipos de Documentos</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addDocumentType">
                    <div class="form-group">
                        <label>Tipo de Arquivo</label>
                        <input type="text" class="form-control" v-model="documentType.type_name">
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
                documentType: {},
                tipos: []
            }
        },
        methods: {
            addDocumentType() {
                this.axios
                    .post('http://localhost:8000/api/documentType', this.documentType)
                    .then(response => (
                        this.$router.push({ name: 'documentType' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>