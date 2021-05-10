<template>
    <div class="card">
        <div class="justify-content-center">
            <div class="card-header">Fábrica Info</div>

            <div class="card-body">
                Teste Talysson
            </div>
             <div>        
                <table class="table text-center">
                    <thead>
                    <tr>
                        <th>Nº Questão</th>
                        <th>Resposta</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="question in questions" :key="question.questao">
                        <td>{{ question.questao }}</td>
                        <td>{{ question.resposta }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                questions: []
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/teste/')
                .then(response => {
                    this.questions = response.data;
                    console.log(this.questions);
                });
        }
    }
</script>
