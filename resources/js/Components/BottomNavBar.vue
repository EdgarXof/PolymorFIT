<script>
export default {
    name: 'BottomNavbar',
};
</script>

<template>
    <div class="fixed inset-x-0 bottom-0 bg-gray-800 text-white">
        <div class="flex justify-between">
            <a href="#home" class="block p-4 text-center flex-grow">Home</a>
            <a href="#search" class="block p-4 text-center flex-grow">Search</a>
            <a href="#favorites" class="block p-4 text-center flex-grow">Favorites</a>
            <a href="#profile" class="block p-4 text-center flex-grow">Profile</a>
        </div>
    </div>
</template>

<style scoped>

</style>
