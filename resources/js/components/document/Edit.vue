<template>
    <div>
        <h3 class="text-center">Atualizar Documento</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateDocument">
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
                    <button type="submit" class="btn btn-primary">Atualizar</button>
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
                .get(`http://localhost:8000/api/document/${this.$route.params.id}`)
                .then((res) => {
                    this.document = res.data;
                });
            this.axios
                .get('http://localhost:8000/api/documentType/')
                .then(response => {
                    this.tipos = response.data;
                });
        },
        methods: {
            updateDocument() {
                this.axios
                    .patch(`http://localhost:8000/api/document/${this.$route.params.id}`, this.document)
                    .then((res) => {
                        this.$router.push({ name: 'document' });
                    });
            }
        }
    }
</script>