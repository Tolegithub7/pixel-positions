<x-layout>
    <div class="space-y-10">
        <section class="text-center font-bold pt-6">
            <h1 class="text-4xl "> Let's find you another Job</h1>
            <form action="" class="mt-6">
                <input type="text" placeholder="Search for jobs" class="w-full max-w-2xl border border-white/10 bg-white/5 rounded px-5 py-3">
            </form>
        </section>
        <section class="pt-6">
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
                {{-- <x-job-card />
                <x-job-card />
                <x-job-card /> --}}
            </div>
        </section>
        
        <section>
            <x-section-heading>Tags </x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag) {
                    <x-tag :tag="$tag" /> {{--  :$tag --}}
                }
                @endforeach
                {{-- <x-tag>Job</x-tag>
                <x-tag>Job</x-tag>
                <x-tag>Job</x-tag>
                <x-tag>Job</x-tag>
                <x-tag>Job</x-tag>
                <x-tag>Job</x-tag>
                <x-tag>Job</x-tag>
                <x-tag>Job</x-tag>
                <x-tag>Job</x-tag>
                <x-tag>Job</x-tag>
                <x-tag>Job</x-tag>
                <x-tag>Job</x-tag>
                <x-tag>Job</x-tag> --}}
            </div>
        </section>

        <section>
            <x-section-heading>Famouse Jobs</x-section-heading>
            <div class="mt-6 space-y-3">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
                {{-- <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide /> --}}
            </div>
    </div>

</x-layout>