<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Compose</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <div class="max-w-4xl mx-auto mt-10 p-4 sm:p-6 bg-gray-100 rounded-lg shadow-lg">
        <div class="flex flex-wrap justify-between mb-4">
            <button class="bg-red-500 text-white px-4 py-2 rounded mb-2 sm:mb-0">Compose</button>
            <div class="flex flex-wrap space-x-2">
                <button class="bg-gray-300 text-black px-4 py-2 rounded mb-2 sm:mb-0">Inbox</button>
                <button class="bg-gray-300 text-black px-4 py-2 rounded mb-2 sm:mb-0">Sent</button>
                <button class="bg-gray-300 text-black px-4 py-2 rounded mb-2 sm:mb-0">Important</button>
                <button class="bg-gray-300 text-black px-4 py-2 rounded mb-2 sm:mb-0">starred</button>
                <button class="bg-gray-300 text-black px-4 py-2 rounded mb-2 sm:mb-0">Drafts</button>
                <button class="bg-gray-300 text-black px-4 py-2 rounded mb-2 sm:mb-0">Trash</button>
            </div>
        </div>
        <div class="space-y-4">
            <div>
                <label class="block text-gray-700">To:</label>
                <input type="text" class="w-full px-4 py-2 border rounded" />
            </div>
            <div>
                <label class="block text-gray-700">Subject:</label>
                <input type="text" class="w-full px-4 py-2 border rounded" />
            </div>
            <div>
                <label class="block text-gray-700">Paragraph</label>
                <div class="border rounded p-2">
                    <div id="toolbar">
                        <button class="ql-bold"></button>
                        <button class="ql-italic"></button>
                        <button class="ql-underline"></button>
                        <button class="ql-list" value="bullet"></button>
                        <button class="ql-list" value="ordered"></button>
                        <button class="ql-link"></button>
                        <button class="ql-image"></button>
                        <button class="ql-table"></button>
                        <button class="ql-undo"></button>
                        <button class="ql-redo"></button>
                    </div>
                    <div id="editor" class="h-32"></div>
                </div>
            </div>
            <div class="flex flex-wrap items-center space-x-2">
                <label class="block text-gray-700">Choose File</label>
                <input type="file" class="border rounded px-4 py-2" />
            </div>
            <div class="flex flex-wrap space-x-2">
                <button class="bg-black text-white px-4 py-2 rounded mb-2 sm:mb-0">Send</button>
                <button class="bg-black text-white px-4 py-2 rounded mb-2 sm:mb-0">Discard</button>
                <button class="bg-black text-white px-4 py-2 rounded mb-2 sm:mb-0">Draft</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: '#toolbar'
            }
        });
    </script>
</body>
</html>