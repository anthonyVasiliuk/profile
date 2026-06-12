<x-layouts.main :title="__('global.my_name').' | '.__('global.position')" :description="__('global.seo_description', ['years' => $profileExperienceYears])">
    <livewire:sections.hero />
    <div class="cyber-seam" aria-hidden="true"></div>
    <livewire:sections.about />
    <div class="cyber-seam" aria-hidden="true"></div>
    <livewire:sections.skills />
    <div class="cyber-seam" aria-hidden="true"></div>
    <livewire:sections.projects />
    <div class="cyber-seam" aria-hidden="true"></div>
    <livewire:sections.experience />
    <div class="cyber-seam" aria-hidden="true"></div>
    <livewire:sections.recomendations />
</x-layouts.main>
