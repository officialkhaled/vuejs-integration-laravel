<template>
    <section>
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5><i class="fa-solid fa-list"></i>&nbsp;&nbsp;Invoices</h5>
                        <div>
                            <div class="input-group flex-nowrap">
                                <input type="text" name="search-invoice" class="form-control" placeholder="Search (#ID)" aria-label="Search" aria-describedby="search-invoice"
                                       v-model="search_term" @keyup="searchInvoice">
                                <span class="input-group-text" id="search-invoice">
                                    <i class="fa-solid fa-magnifying-glass text-secondary"></i>
                                </span>
                            </div>
                        </div>
                        <button type="button" class="btn btn-sm btn-primary" @click="createInvoice">
                            <i class="fa-solid fa-plus"></i>&nbsp;&nbsp;Add
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr class="bg-dark text-white">
                            <th scope="col" class="text-center">SL</th>
                            <th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-center">Date</th>
                            <th scope="col" class="text-center">Number</th>
                            <th scope="col" class="text-center">Customer</th>
                            <th scope="col" class="text-center">Due Date</th>
                            <th scope="col" class="text-center">Total</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(item, index) in invoices" :key="item.id" v-if="invoices.length > 0">
                            <td class="text-center" width="10%">{{ index + 1 }}</td>
                            <td class="text-center" width="10%">#{{ item.id }}</td>
                            <td class="text-center">{{ formatDate(item.date) }}</td>
                            <td class="text-center">{{ item.invoice_number }}</td>
                            <td class="text-center">{{ item.customer?.first_name }}</td>
                            <td class="text-center">{{ formatDate(item.due_date) }}</td>
                            <td class="text-center">${{ item.total }}</td>
                            <td class="text-center" width="16%">
                                <div class="d-flex justify-content-center gap-1">
                                    <button type="button" class="btn btn-sm btn-success" @click="handleEdit(index)">
                                        <i class="fa-solid fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger" @click="handleDelete(index)">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr v-else>
                            <td colspan="8" class="text-center text-danger">No Data Found!</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <div class="card-footer">
                    &nbsp;
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "InvoiceList",
    data() {
        return {
            invoices: [],
            search_term: null,
        }
    },
    watch: {},
    methods: {
        formatDate: function (dateString) {
            if (!dateString) return "N/A";

            return new Intl.DateTimeFormat('en-US', {
                year: 'numeric',
                month: 'short',
                day: '2-digit'
            }).format(new Date(dateString));
        },
        getInvoices: async function () {
            try {
                const response = await axios.get('api/get-all-invoices');
                this.invoices = response.data.data;
            } catch (error) {
                console.error("Error Fetching Invoices: ", error);
            }
        },
        searchInvoice: async function () {
            try {
                const response = await axios.get('api/search-invoice?id=' + this.search_term);
                this.invoices = response.data.data;
            } catch (error) {
                console.error("Error Fetching Invoices: ", error);
            }
        },
        createInvoice: async function () {
            const form = await axios.get('api/create-invoice');
            this.$router.push('invoice-create');
        },
        handleEdit: function (index) {
            console.log({index});
        },
        handleDelete: async function (index) {
            // try {
            //     const response = await axios.get('api/delete-invoice?id=' + index);
            //     this.invoices = response.data.data;
            // } catch (error) {
            //     console.error("Error Fetching Invoices: ", error);
            // }
        },
    },
    async mounted() {
        await this.getInvoices();
    }
}
</script>

<style scoped>

</style>
