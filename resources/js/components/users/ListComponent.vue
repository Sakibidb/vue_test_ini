<template>
    <div class="mt-10 mb-10">
        <router-link :to="{name : 'user.add'}" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"> + add user </router-link>
    </div>



    <div class="relative overflow-x-auto">
        <div class="contain">
            <table
                class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
            >
                <thead
                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                >
                    <tr>
                        <th scope="col" class="px-6 py-3">Product name</th>
                        <th scope="col" class="px-6 py-3">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="product in products"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                    >
                        <td class="px-6 py-4">
                            {{ product.name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ product.price }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</template>

<script>

export default {
    name: "ListComponent",
    data() {
        return {
            products: [
                {
                    name: "Iphone",
                    price: 200,
                },
                {
                    name: "Samsung",
                    price: 500,
                },
                {
                    name: "Iphone",
                    price: 200,
                },
            ],
        };
    },
};
</script>
