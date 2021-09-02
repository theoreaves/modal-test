<html>
<head>
    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles

    <!-- Scripts -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
<!-- Your application content -->
<button onclick="Livewire.emit('openModal', 'hello-world')">Open Modal</button>
@livewire('livewire-ui-modal')
@livewireScripts
</body>
</html>
