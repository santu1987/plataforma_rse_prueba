<template>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{TituloRegister}}</div>

                <div class="card-body">
                    <form method="POST" :action="RouteRegister" @submit.prevent="submitForm">
                        <input type="hidden" name="_token" :value="csrf">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{TituloName}}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" :value="OldName" required autocomplete="name" autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{TituloEmail}}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" :value="OldEmail" required autocomplete="email">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{TituloPassword}}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{TituloConfirmarPassword}}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{TituloRegister}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        props: ['RouteRegister','OldName','OldEmail','TituloRegister','TituloName','TituloEmail','TituloPassword','TituloConfirmarPassword'],
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }
    }
</script>
