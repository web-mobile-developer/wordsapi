<template>
    <div class="container">
        <h2>Try It</h2>
        <p>Enter a word to lookup and what you want the API to return.</p>
        <div class="row">
            <div class="col-4">
                <form action method="post" ref="form">
                    <div class="form-group">
                        <label class="d-block">Enter a Word</label>
                        <input name="word" v-model="word" type="text" autofocus placeholder="example" class="w-100"/>
                    </div>
                    <button class="btn btn-success w-100" >Call the API</button>
                </form>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label class="d-block">Response</label>
                    <textarea name="response" v-model="response" class="w-100"/>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label class="d-block">Recent Words</label>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>