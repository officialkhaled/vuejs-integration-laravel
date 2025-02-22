<template>
    <!--    <div class="d-flex justify-content-center flex-col mt-6">-->

    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">
                <i class="fa-brands fa-facebook"></i>&nbsp;&nbsp;Go somewhere
            </a>
        </div>
    </div>

    <button type="button" class="btn btn-primary" id="liveToastBtn" @click="showToast">
        Show live toast
    </button>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>

    <!--    </div>-->
</template>

<script>
export default {
    name: "TestComponent",
    components: {},
    data() {
        return {}
    },
    computed: {},
    watch: {},
    methods: {
        showToast: function () {
            var toastEl = document.getElementById("liveToast");
            var toast = new bootstrap.Toast(toastEl, {
                autohide: false,
            });
            toast.show();
        },
    },
    mounted() {
    }
}
</script>

<style>

</style>

<style scoped>

</style>
