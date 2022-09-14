<x-app-layout>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <h1 class="text-xl">Créer votre évènement</h1>
            <form action="{{ route('event.store') }}" id="form" method="post" class="my-4">
                @csrf
                <x-input-label for="title" value="Titre" />
                <x-text-input id="title" type="text" name="title" :value="old('title')" />
                <x-input-label for="content" value="Contenu" />
                <textarea id="content" name="content" :value="old('content')"
                          class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                ></textarea>
                <x-input-label for="premium" value="Premium ?" />
                <input type="checkbox" name="premium" id="premium"
                       class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                />
                <x-input-label for="starts_at" value="Date de démarrage" />
                <x-text-input id="starts_at" type="date" name="starts_at" />
                <x-input-label for="ends_at" value="Date de fin" />
                <x-text-input id="ends_at" type="date" name="ends_at" />
                <x-input-label for="tags" value="Tags (séparé par une virgule)" />
                <x-text-input id="tags" type="text" name="tags" class="block" />

                <x-text-input type="hidden" name="payment_method" id="payment_method" />
                <!-- Stripe Elements Placeholder -->
                <div id="card-element"></div>

                <x-primary-button class="mt-3" id="submit-button">Créer mon événement</x-primary-button>
            </form>
        </div>
    </section>
</x-app-layout>
