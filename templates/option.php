<div class="ap-h-full ap-m-[50px]">
    <div class="ap-flex ap-items-end ap-justify-between ap-w-full ap-pb-3">
        <div class="">
            <h1 class="ap-font-normal ap-text-2xl">AiPosts Options </h1>
            <small>These data will only save for <code class="ap-rounded-md">AiPosts</code> application
                management</small>
        </div>

    </div>
    <div class="ap-mt-5 ap-w-full ap-flex ap-gap-10 ap-items-start">
        <main class="ap-flex-1">
            <form action="" class="ap-w-1/2 ap-mx-auto">
                <div class="ap-flex ap-bg-slate-50 ap-justify-between ap-items-center ap-py-2 ap-px-3 ap-rounded-md ap-shadow-md ap-gap-3">
                    <label class="ap-flex-1" for="keywords">
                        <input class="ap-px-3 ap-py-2 ap-bg-white ap-border ap-shadow-sm ap-border-slate-300 ap-placeholder-slate-400 disabled:ap-bg-slate-50 disabled:ap-text-slate-500 disabled:ap-border-slate-200 focus:ap-outline-none focus:ap-border-sky-500 focus:ap-ring-sky-500 ap-block ap-w-full ap-rounded-md sm:ap-text-sm focus:ap-ring-1 invalid:ap-border-pink-500 invalid:ap-text-pink-600 focus:ap-invalid:ap-border-pink-500 focus:ap-invalid:ring-pink-500 disabled:ap-shadow-none" type="text" name="keywords" id="keywords" placeholder="Keyword for generating post/page" />
                    </label>
                    <label class="ap-flex-1" for="post_type">
                        <select class="ap-w-full ap-py-1 ap-px-3 ap-ring-0" name="post_type" id="post_type">
                            <option value="post">Post</option>
                            <option value="page">Page</option>
                        </select>
                    </label>
                    <label class="ap-flex-1" for="number">
                        <input class="ap-w-full ap-py-1 ap-px-3 ap-ring-0" type="text" name="number" id="number" />
                    </label>
                    <button class="ap-bg-blue-500 ap-py-2 ap-px-4 ap-shadow-sm ap-text-white ap-rounded-md">Generate</button>
                </div>
            </form>
        </main>
    </div>
</div>