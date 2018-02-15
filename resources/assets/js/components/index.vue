<template>
    <section class="hero is-success is-fullheight">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-menu">
                        <div class="navbar-start">
                            <a class="navbar-item" href="/">Home</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="hero-body">
            <div class="container">
                <h1 class="title">Hi <slot></slot></h1>
                <h2 class="subtitle">Full Height subtitle</h2>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data: function(){
            return{
                data: 'data'
            }
        },
        mounted() {
            console.log('my first app')
        }
    }
</script>
