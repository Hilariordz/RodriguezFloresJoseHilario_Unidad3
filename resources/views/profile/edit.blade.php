@include('layouts.nav-dashboard')
    <div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0">
            
            <div class="flex-1 shadow rounded-lg p-6" style="background-color: #f3f7fc;">
                <h3 class="text-lg font-semibold text-indigo-700 mb-4">Información del perfil</h3>
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="flex-1 shadow rounded-lg p-6" style="background-color: #f3f7fc;">
                <h3 class="text-lg font-semibold text-indigo-700 mb-4">Cambiar contraseña</h3>
                @include('profile.partials.update-password-form')
            </div>

            <div class="flex-1 shadow rounded-lg p-6" style="background-color: #f3f7fc;">
                <h3 class="text-lg font-semibold text-red-600 mb-4">Eliminar cuenta</h3>
                @include('profile.partials.delete-user-form')
            </div>

        </div>
    </div>
</div>
