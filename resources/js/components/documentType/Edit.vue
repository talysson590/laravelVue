<template>
    <div>
        <h3 class="text-center">Atualizar de Tipos de Documentos</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateDocumentType">
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
        created() {
            this.axios
                .get(`http://localhost:8000/api/documentType/${this.$route.params.id}`)
                .then((res) => {
                    this.documentType = res.data;
                });
        },
        methods: {
            updateDocumentType() {
                this.axios
                    .patch(`http://localhost:8000/api/documentType/${this.$route.params.id}`, this.documentType)
                    .then((res) => {
                        this.$router.push({ name: 'documentType' });
                    });
            }
        }
    }
</script>