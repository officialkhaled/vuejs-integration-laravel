<template>
    <section>
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5><i class="fa-solid fa-plus"></i>&nbsp;&nbsp;Add Invoice</h5>
                        <button type="button" class="btn btn-sm btn-primary" @click="createInvoice">
                            <i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;Back
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Customer</label>
                                <select name="customer_id" id="customer_id" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Invoice Number</label>
                                <input type="number" name="invoice_number" id="invoice_number" placeholder="Invoice Number" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" name="date" id="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Due Date</label>
                                <input type="date" name="due_date" id="due_date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Reference (Optional)</label>
                                <input type="number" name="reference" id="reference" placeholder="Reference" class="form-control">
                            </div>
                        </div>
                    </div>

                    <hr class="mt-4">

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <thead>
                                <tr class="bg-dark text-white">
                                    <th class="text-center" width="40%">Item Description</th>
                                    <th class="text-center" width="14%">Unit Price</th>
                                    <th class="text-center" width="14%">Quantity</th>
                                    <th class="text-center" width="14%">Total</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center"></td>
                                    <td class="text-center">
                                        <input type="number" name="unit_price" id="unit_price" placeholder="Unit Price" class="form-control">
                                    </td>
                                    <td class="text-center">
                                        <input type="number" name="quantity" id="quantity" placeholder="Quantity" class="form-control">
                                    </td>
                                    <td class="text-center">
                                        $&nbsp;
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-danger">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        <button type="button" class="btn btn-sm btn-success">
                                            <i class="fa-solid fa-plus"></i>&nbsp;&nbsp;Add New Line
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Terms & Conditions</label>
                                <textarea class="form-control" name="terms_and_conditions" id="terms_and_conditions"
                                          rows="4" placeholder="Terms & Conditions"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th width="60%">Sub Total</th>
                                    <td class="text-center">$1000</td>
                                </tr>
                                <tr>
                                    <th>Discount</th>
                                    <td>
                                        <input type="number" class="form-control" placeholder="Discount">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Grand Total</th>
                                    <td class="text-center">$1000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end gap-1">
                        <button type="button" class="btn btn-sm btn-warning" @click="pageRefresh">
                            <i class="fa-solid fa-refresh"></i>&nbsp;&nbsp;Refresh
                        </button>
                        <button type="submit" class="btn btn-sm btn-success">
                            <i class="fa-solid fa-save"></i>&nbsp;&nbsp;Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "InvoiceCreate",
    data() {
        return {
            invoices: [],
            search_term: null,
        }
    },
    watch: {},
    methods: {
        pageRefresh: () => window.location.reload(),
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
            this.$router.push('invoice-list');
        },
        handleEdit: function (index) {
            console.log({index});
        },
        handleDelete: function (index) {
            console.log({index});
        },
    },
    async mounted() {
        await this.getInvoices();
    }
}
</script>

<style scoped>

</style>
