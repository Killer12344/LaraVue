<template>
    <div class="row mt-5">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <table>
                        <tr class="table-height">
                            <td style="width:100px">Email</td>
                            <td>: {{ myself.email }} </td>
                        </tr>
                        <tr class="table-height">
                            <td style="width:100px">Phone</td>
                            <td>: {{ myself.phone }} </td>
                        </tr>
                        <tr class="table-height">
                            <td style="width:100px">Address</td>
                            <td>: {{ myself.address }}  </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="my-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2655.291712739802!2d96.26419602070732!3d16.82305108297655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2smm!4v1651912421153!5m2!1sen!2smm" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="send">
                        <div class="mb-3">
                            <label for="name" class="mb-2 fw-bolder"> Name </label>
                            <input type="text" name="name" v-model="form.name" class="form-control"
                                   :class=" {'is-invalid':form.errors.has('name')} ">
                            <div class="text-danger small" v-if="form.errors.has('name')" v-html="form.errors.get('name')"></div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="mb-2 fw-bolder"> Email Address </label>
                            <input type="email" name="email" v-model="form.email" class="form-control"
                                   :class=" {'is-invalid':form.errors.has('email')} ">
                            <div class="text-danger small" v-if="form.errors.has('email')" v-html="form.errors.get('email')"></div>

                        </div>
                        <div class="mb-3">
                            <label for="message" class="mb-2 fw-bolder"> Message </label>
                            <textarea name="message" rows="7" v-model="form.message" class="form-control"
                                      :class=" {'is-invalid':form.errors.has('message')} "></textarea>
                            <div class="text-danger small" v-if="form.errors.has('message')" v-html="form.errors.get('message')"></div>

                        </div>
                        <div class="text-end">
                            <button class="btn btn-primary"> Send Message </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { Form } from "vform";

    export default {
        name: "ContactComponent.vue",
        data() {
            return {
                myself: {
                    email : 'hh1716101@gmail.com',
                    phone : '09446202832',
                    address : `15th A, Build 8, Room 003, Yuzana Garden City`
                },
                form: new Form({
                        name : '',
                        email : '',
                        message : '',
                    }),
            }
        },
        methods: {
            send() {
                this.form.post('/send-contact').then((response) =>{
                    console.log(response)
                });
            }
        },
    }
</script>

<style scoped>
    .table-height{
        height: 35px;
    }
</style>
