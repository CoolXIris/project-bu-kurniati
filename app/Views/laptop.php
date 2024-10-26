<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Review - Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container my-5">
        <h1 class="text-center">Contact Us</h1>
        <p class="text-center">We'd love to hear from you! Please use the form below to get in touch.</p>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <section id="footer" class="footer">
    <footer class="bg-gray-900 py-8">
            <div class="container mx-auto text-left px-4">
                <div class="flex flex-col items-start mb-4">
                    <div class="text-left">
                        <h1 class="text-2xl font-bold mb-1">GADGETGLIMPSE</h1>
                        <p class="text-sm">The Gadget &amp; Technology Universe</p>
                    </div>
                </div>
                <div class="border-t border-gray-700 pt-4">
                    <p class="text-sm mb-4">
                        © 2024 GadgetGlimpse by Kelompok 1. All Rights Reserved.
                    </p>
                    <div class="flex flex-wrap justify-start space-x-4 text-sm">
                        <a class="hover:underline" href="#">
                            Home
                        </a>
                        <span class="hidden sm:inline">
                            •
                        </span>
                        <a class="hover:underline" href="#">
                            Tentang GadgetGlimpse
                        </a>
                        <span class="hidden sm:inline">
                            •
                        </span>
                        <a class="hover:underline" href="#">
                            Kebijakan Privasi
                        </a>
                        <span class="hidden sm:inline">
                            •
                        </span>
                        <a class="hover:underline" href="#">
                            Kelompok Kami
                        </a>
                        <span class="hidden sm:inline">
                            •
                        </span>
                        <a class="hover:underline" href="#">
                            Media Sosial
                        </a>
                    </div>
                </div>
            </div>
            <div class="fixed bottom-4 right-4">
                <a class="bg-gray-800 p-2 rounded-full" href="#">
                    <i class="fas fa-chevron-up text-white"></i>
                </a>
            </div>
    </footer>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
