<!DOCTYPE html>
<html lang="en" class="dark">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Developer Documentation</title>
	<link rel="icon" href="https://fav.farm/👻" />
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-[#1b1b18] dark:bg-[#0a0a0a] dark:text-[#f5f5f5] min-h-screen">
	<div class="container mx-auto px-4 py-8">
		{{-- Header --}}
		<header class="mb-10 flex justify-between items-center">
			<div>
				<h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-2">
					Developer Documentation (env: {{ config('app.env') }}, service: {{ $metaDetails['service_tag'] }})
				</h1>

				<p class="text-gray-600 dark:text-gray-400">
					Access all development resources and documentation in one place
				</p>
			</div>
		</header>

		{{-- Doc Links --}}
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
			@foreach ($docsLinks as $docsLink)
				<a href="{{ $docsLink['link'] }}"
					class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-100 ease-in-out dark:bg-[#161615] dark:text-[#EDEDEC] hover:scale-[1.009]">
					<div class="p-6">
						<div class="flex items-center mb-4">
							<x-dynamic-component :component="'heroicon-o-' . $docsLink['icon']" class="size-7 stroke-[1px]" />

							<h2 class="ml-3 text-xl text-gray-800 dark:text-gray-200">
								{{ $docsLink['title'] }}
							</h2>
						</div>

						<p class="text-gray-600 dark:text-gray-400">
							{{ $docsLink['description'] }}
						</p>
					</div>
				</a>
			@endforeach
		</div>

		{{-- Meta Details --}}
		<section class="flex flex-col gap-5 justify-center items-center mx-auto mt-20">
			<x-dynamic-component :component="'heroicon-o-' . $metaDetails['icon']" class="size-[200px] stroke-[0.5px] dark:stroke-gray-200" />

			<h1 class="text-3xl dark:text-gray-200">
				{{ $metaDetails['service_name'] }}
			</h1>
		</section>
	</div>
</body>

</html>
