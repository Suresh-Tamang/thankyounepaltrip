<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Listing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .dropzone {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 2px dashed #d1d5db;
            border-radius: 0.5rem;
            padding: 1.5rem;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        .dropzone.dragover {
            background-color: #f3f4f6;
        }
    </style>
</head>
<body class="bg-gray-200">
    <div class="max-w-7xl mx-auto p-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Tour Listing</h1>
            <div class="bg-gray-100 p-4 rounded-lg mb-6">
                <h2 class="text-xl font-semibold mb-4">Add Details</h2>
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-gray-700">Title:</label>
                            <input type="text" class="w-full border border-gray-300 rounded-lg p-2">
                        </div>
                        <div>
                            <label class="block text-gray-700">District:</label>
                            <select class="w-full border border-gray-300 rounded-lg p-2">
                                <option>Choose...</option>
                                <option>Kathmandu</option>
                                <option>Lalitpur</option>
                                <option>Bhaktapur</option>
                                <option>Kaski</option>
                                <option>Lumbini</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700">City:</label>
                            <input type="text" class="w-full border border-gray-300 rounded-lg p-2">
                        </div>
                        <div>
                            <label class="block text-gray-700">Vehicles:</label>
                            <select class="w-full border border-gray-300 rounded-lg p-2">
                                <option>Choose...</option>
                                <option>Bus</option>
                                <option>Flight</option>
                                <option>Helicopter</option>
                                <option>Car</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700">Duration:</label>
                            <select class="w-full border border-gray-300 rounded-lg p-2">
                                <option>Choose...</option>
                                <option>1 Day</option>
                                <option>3 Day</option>
                                <option>7 Day</option>
                                <option>15 Day</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700">Price:</label>
                            <input type="Number" class="w-full border border-gray-300 rounded-lg p-2">
                        </div>
                    </div>
                    <div id="dropzone" class="dropzone mb-4">
                        <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-2"></i>
                        <p class="text-gray-700">Drop files here or click to upload.</p>
                        <p>upload picture here</p>
                        <input type="file" id="fileInput" class="hidden" accept="image/*">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Embed Map</label>
                        <textarea class="w-full border border-gray-300 rounded-lg p-2 h-24"></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Tour Details</label>
                        <textarea class="w-full border border-gray-300 rounded-lg p-2 h-24"></textarea>
                    </div>
                    <div class="flex justify-end space-x-4">
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg">Submit</button>
                        <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const dropzone = document.getElementById('dropzone');
        const fileInput = document.getElementById('fileInput');

        dropzone.addEventListener('click', () => fileInput.click());

        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropzone.classList.add('dragover');
        });

        dropzone.addEventListener('dragleave', () => {
            dropzone.classList.remove('dragover');
        });

        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropzone.classList.remove('dragover');
            const files = e.dataTransfer.files;
            handleFiles(files);
        });

        fileInput.addEventListener('change', (e) => {
            const files = e.target.files;
            handleFiles(files);
        });

        function handleFiles(files) {
            const validFiles = Array.from(files).filter(file => file.type.startsWith('image/'));
            if (validFiles.length > 0) {
                alert(`${validFiles.length} image(s) selected.`);
            } else {
                alert('Please upload only image files.');
            }
        }
    </script>
</body>
</html>