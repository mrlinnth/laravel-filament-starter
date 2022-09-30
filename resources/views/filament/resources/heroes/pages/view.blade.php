<x-filament::page>
    <div class="mockup-phone">
        <div class="camera"></div>
        <div class="display">
            <div class="artboard artboard-demo phone-1">
                <div class="m-10 max-w-sm">
                    <div class="px-4 pt-8 pb-10">
                      <div class="relative mx-auto w-36 rounded-full">
                        <img class="mx-auto h-auto w-full rounded-full" src="{{ $record->getFirstMediaUrl('hero') }}" alt="" />
                      </div>
                      <h1 class="my-1 text-center text-xl font-bold leading-8 text-gray-900">{{ $record->name }}</h1>
                      <h3 class="font-lg text-semibold text-center leading-6 text-gray-600">{{ $record->species }}</h3>
                      <p class="text-center text-sm leading-6 text-gray-500 hover:text-gray-600">{{ $record->history }}</p>
                      <ul class="mt-3 divide-y rounded bg-gray-100 py-2 px-3 text-gray-600 shadow-sm hover:text-gray-700 hover:shadow">
                        <li class="flex items-center py-3 text-sm">
                          <span>Eye color</span>
                          <span class="ml-auto"><span class="rounded-full bg-green-200 py-1 px-2 text-xs font-medium text-green-700">{{ $record->eye_color }}</span></span>
                        </li>
                        <li class="flex items-center py-3 text-sm">
                          <span>Created at</span>
                          <span class="ml-auto">{{ $record->created_at }}</span>
                        </li>
                      </ul>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-filament::page>
