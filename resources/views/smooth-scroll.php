<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Smooth Scrolling</title>
</head>
<body>
  <p><a href="/"> home </a></p>
    <div id="app" class="p-8">
        <h1 class="text-2xl font-bold">Smooth Scroll</h1>

        <scroll-link href="#categories" class="text-blue-500">Go To Testimonials</scroll-link>

        <div style="height: 2000px">
<p>Dolore elit ut officia reprehenderit culpa magna magna cillum excepteur Lorem. Ut labore do nostrud laboris deserunt aliqua commodo veniam irure aute et minim cupidatat anim voluptate labore est. Lorem sit sint Lorem in ut consequat pariatur. Culpa in proident mollit cupidatat minim ipsum occaecat proident. Ex esse veniam cupidatat dolore excepteur voluptate aliqua magna in deserunt aliquip veniam incididunt fugiat consectetur fugiat.</p>
<p>Exercitation dolore labore non nisi eiusmod incididunt sunt. Ex dolore quis qui sunt dolore ex velit culpa proident et ullamco dolor sit labore laboris amet. Et in fugiat velit ut aliquip quis do irure tempor id in non voluptate nisi. In aute non dolore magna voluptate ut laboris et deserunt et officia adipisicing do nulla non velit.</p>
<p>Proident magna sint esse minim proident est eu id magna cupidatat in excepteur laborum. Nisi sit ex mollit commodo officia pariatur esse amet eiusmod exercitation mollit magna culpa irure. Sit commodo proident ut eiusmod laboris aute elit nisi. Ullamco duis laboris occaecat eiusmod pariatur laboris enim sint labore id officia. Aute laboris fugiat reprehenderit fugiat ex tempor elit fugiat veniam laborum commodo velit labore velit. Aliqua cupidatat amet pariatur et excepteur anim id aute est eiusmod amet. Esse amet eu nulla do ipsum id dolore ullamco deserunt amet ut et anim in tempor aliquip. Ex sit nisi esse officia proident cupidatat nisi ad enim velit id exercitation pariatur in.</p>
<p>Quis commodo fugiat eu ut ut aliquip aute nostrud sunt amet velit proident non ut non. Ea consectetur commodo et ea eiusmod labore ut quis ad consequat eiusmod dolore mollit. Sint duis ad voluptate sunt enim aliquip deserunt Lorem in. Occaecat quis aliqua eu veniam est consectetur ad voluptate magna ex pariatur. Nostrud ad sit cillum anim irure voluptate commodo nostrud ullamco culpa irure pariatur nostrud consequat ea. Commodo mollit aute irure deserunt ad do excepteur do esse laboris nisi qui ipsum tempor.</p>
        </div>

        <div id="categories">
            <h2 class="font-bold mb-6">Testimonials</h2>

            <div class="flex">
                <div class="w-1/3 h-48 bg-gray-200 p-4">
                    <scroll-link href="#app" class="text-blue-500">Go Back Up</scroll-link>
                </div>
                <div class="w-1/3 h-48 bg-gray-400 p-4">Item</div>
                <div class="w-1/3 h-48 bg-gray-200 p-4">Item</div>
            </div>
        </div>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>
