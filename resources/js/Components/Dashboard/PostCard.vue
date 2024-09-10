<template>
    <div class="bg-gray-800 border border-gray-900 rounded-lg mb-8 overflow-hidden">
        <div class="flex items-center justify-between px-4 py-2">
            <div class="flex items-center space-x-3">
                <img
                    src="https://via.placeholder.com/40"
                    alt="Avatar"
                    class="w-10 h-10 rounded-full"
                />
                <div>
                    <p class="font-semibold text-white">nome_de_usuario</p>
                    <p class="text-sm text-gray-500">Localização</p>
                </div>
            </div>
            <button class="text-gray-500">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 21h18M3 8h18M3 16h18"></path>
                </svg>
            </button>
        </div>
        <div class="px-4 py-2">
            <div class="flex space-x-4 mb-2">
                <h3 class="text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi at excepturi neque delectus laudantium. Rem labore quos sed cum atque optio rerum eius, itaque quas libero distinctio deleniti architecto laudantium?</h3>
            </div>
            <p class="text-gray-500 text-sm cursor-pointer" id="show-comments">Ver todos os comentários</p>
            <div id="comments" class="hidden mt-4 max-h-60 overflow-y-auto">
                <div class="flex space-x-3 mb-4 flex-col">
                    <div class="flex items-center gap-2">
                        <img src="https://via.placeholder.com/40" alt="Avatar" class="w-8 h-8 rounded-full" />
                        <div>
                            <p class="font-semibold">usuario_comentario</p>
                            <p class="text-gray-700 text-sm">Ótima foto! <span class="text-gray-500 text-xs">Há 30 minutos</span></p>
                        </div>
                    </div>
                </div>
                <!-- Adicione mais comentários conforme necessário -->
            </div>
            <button id="add-comment-btn" class="mt-4 text-blue-500 font-semibold">Adicionar Comentário</button>
        </div>
    </div>
</template>
