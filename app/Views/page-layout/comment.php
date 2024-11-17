<div class="ml-2 p-6 mb-4" style="width: 900px;">
    <h2 class="text-2xl font-semibold mb-2">
        <i class="fas fa-comment-dots"></i> Tinggalkan komentar
    </h2>
    <p class="text-sm text-gray-400 mb-4">
        Alamat email Anda tidak akan dipublikasikan. Ruas yang wajib ditandai <span class="text-red-500">*</span>
    </p>
    <form id="feedbackForm" action="javascript:void(0);" method="post">
        <div class="mb-4">
            <textarea
                name="komentar"
                class="w-full p-4 bg-gray-800 text-gray-300 border border-gray-700 rounded focus:outline-none focus:border-gray-500"
                rows="6"
                placeholder="Tinggalkan komentar"></textarea>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <input
                type="text"
                name="nama"
                class="p-4 bg-gray-800 text-gray-300 border border-gray-700 rounded focus:outline-none focus:border-gray-500"
                placeholder="Namamu" />
            <input
                type="email"
                name="email"
                class="p-4 bg-gray-800 text-gray-300 border border-gray-700 rounded focus:outline-none focus:border-gray-500"
                placeholder="Email Anda" />
            <input
                type="url"
                name="situs"
                class="p-4 bg-gray-800 text-gray-300 border border-gray-700 rounded focus:outline-none focus:border-gray-500"
                placeholder="Situs Web Anda" />
        </div>
        <button
            type="submit"
            class="px-6 py-3 bg-[#ff0055] text-white font-semibold rounded hover:bg-[#e6004c] focus:outline-none">
            Kirim Komentar
        </button>
    </form>
</div>