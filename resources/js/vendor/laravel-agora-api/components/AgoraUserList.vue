<template>
    <div class="agora-active-users-container">
        <h2 class="agora-active-users-title">Active Users</h2>
        <div>
            <div @click="something" style="background-color: red;">Call</div>
        </div>
    </div>
</template>

<script>
// import { mapState } from 'vuex'

export default {
    // name: "AgoraUserList",

    computed: {
        // ...mapState('agora', [
        //     'activeUsers',
        //     'currentUser',
        // ]),
    },

    mounted() {
        this.something();
    },

    methods: {
        // ...mapMutations({
        //     makeCall: 'agora/makeCall',
        // }),

        something: function(event) {
            console.log('testasdasdads');
        }
        // ...mapActions('agora', [
        //     'makeCall',
        // ]),
    }
}
</script>

<style scoped>

</style>
