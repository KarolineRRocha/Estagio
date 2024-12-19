<x-app-layout>
    <div
        class="bodyChat h-full w-full flex bg-white shadow border lg:shadow-sm overflow:hidden inset-0 lg-top-16 lg:inset-x-2 m-auto lg:h-[90%] rounded-t-lg">
        <div class="leftSide relative md:w-[320px] xl:w-[400px] overflow-y-auto shrink-0">
            @include('livewire.chat.chat-list')
        </div>
        <div class="md:grid w-full relative overflow-y-auto" style="contain:content">
            <div class="rightSide m-auto text-center justify-center h-full flex flex-col gap-3">
                <h4 class="font-medium text-lg">Escolha uma conversa para começar</h4>
            </div>
        </div>
    </div>
</x-app-layout>
