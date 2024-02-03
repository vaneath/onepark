<script setup></script>

<template>
    <aside class="transition-transform -translate-x-full sm:translate-x-0">
        <div class="px-3 py-4 overflow-y-auto bg-gray-800">
            <form class="max-w-sm mx-auto">
                <div class="mb-5">
                    <label
                        for="reason"
                        class="block mb-2 text-sm font-medium text-white"
                        >Reason</label
                    >
                    <input
                        type="text"
                        id="reason"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Reason for leaving..."
                        required
                    />
                </div>
                <button
                    type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                >
                    Submit
                </button>
            </form>
        </div>
    </aside>
</template>
