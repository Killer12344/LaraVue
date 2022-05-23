<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="table in tabels" :key="table.id">
                                    <td> {{ table.id }} </td>
                                    <td> {{ table.name }} </td>
                                    <td> {{ table.age }} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                tabels : [
                    {'id' : 1,'name' : 'Mg Mg', 'age' : '18'},
                    {'id' : 2,'name' : 'Mg Aung', 'age' : '28'},
                    {'id' : 3,'name' : 'Mg Ko', 'age' : '19'},
                    {'id' : 4,'name' : 'Mg Myo', 'age' : '18'},
                ],
                // name : 'Hello World',
            }
        },
    }
</script>
