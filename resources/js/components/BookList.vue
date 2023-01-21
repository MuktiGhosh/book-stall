<template>
    <div>
        <div class=" table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Author Name</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(book,index) in books" :key="book.id">
                    <td class="align-middle">{{ book.name }}</td>
                    <td class="align-middle">{{ book.author }}</td>
                    <td class="align-middle">{{ book.price }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>

export default {
    name: "books",
    components: {
    },
    props: {
        books: {required: true}
    },
    data() {
        return {};
    },
};
</script>
<style scoped>

</style>
