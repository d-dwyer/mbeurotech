<?php
/**
 * The front page template file
 */

get_header(); ?>

<!-- Hero Section -->
<section class="hero-section relative overflow-hidden flex items-center" style="min-height: 90vh; background: #000;">
    <div class="absolute inset-0 z-0">
        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDuLRdbxc7w8n-Z6TpMVqzpQW7IWLD8Z9pBiw1z6Bk2CsCGvr1QymDVmENcblt0yATWMKbKrCMmN5Eb37Piu_OCSojbJhQ_YM5BaCQj6PAC3Y_Sj0ktotNgxjYI4rWMEZ5evt6DmL98aDDpFOwVwmvE2ou_2HLjhqtOvGA7fWPs4xI45M5yKG-OvQh95G7eMdQ8SKzP9Ew4N-jVVJOGkrBA-QSr6T5YuSOlm43ND0AixJN3DccZG92YAP0KpVCaUrGh935j_PbeZfw" 
             alt="Mercedes-Benz Workshop" class="w-full h-full object-cover opacity-60 grayscale-[40%]">
        <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 50%, transparent 100%);"></div>
    </div>
    
    <div class="container relative z-10">
        <div class="max-w-2xl text-white">
            <span class="text-gold font-bold uppercase tracking-widest text-xs mb-4 block">Premier Jamaican Specialist</span>
            <h1 class="mb-6 leading-tight">Trust + Precision + Expertise</h1>
            <p class="text-silver text-lg mb-8 max-w-lg">
                Luxury automotive care specialized for Mercedes-Benz. Experience the difference of direct technician access in our sterile, high-tech environment.
            </p>
            <div class="flex gap-4 flex-col md:flex-row">
                <a href="<?php echo esc_url( home_url( '/booking' ) ); ?>" class="btn btn--gold">Book Appointment</a>
                <a href="https://wa.me/yournumber" class="btn btn--outline" style="color: white; border-color: white;">
                    <span class="material-symbols-outlined mr-2">chat</span> WhatsApp Chat
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="py-section bg-surface-pure">
    <div class="container">
        <div class="flex justify-between items-end mb-16">
            <div>
                <h2 class="mb-2">Technical Mastery</h2>
                <div style="width: 60px; height: 3px; background: var(--accent);"></div>
            </div>
            <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="text-gold text-xs font-bold uppercase tracking-widest border-b border-gold pb-1">View All Services</a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Service Item 1 -->
            <div class="service-card p-8 border border-light transition-all hover:border-primary group">
                <span class="material-symbols-outlined text-4xl mb-6 text-gold">settings_suggest</span>
                <h3 class="mb-4 text-xl">Diagnostics</h3>
                <p class="text-secondary text-sm">Advanced computer-aided analysis using factory-grade scanning tools to pinpoint precise issues.</p>
            </div>
            <!-- Service Item 2 -->
            <div class="service-card p-8 border border-light transition-all hover:border-primary group">
                <span class="material-symbols-outlined text-4xl mb-6 text-gold">build</span>
                <h3 class="mb-4 text-xl">Maintenance</h3>
                <p class="text-secondary text-sm">A & B Services performed with clinical precision, utilizing only genuine fluids and filters.</p>
            </div>
            <!-- Service Item 3 -->
            <div class="service-card p-8 border border-light transition-all hover:border-primary group">
                <span class="material-symbols-outlined text-4xl mb-6 text-gold">engineering</span>
                <h3 class="mb-4 text-xl">Repairs</h3>
                <p class="text-secondary text-sm">Complex mechanical and electrical restoration for AMG and classic Mercedes-Benz engines.</p>
            </div>
            <!-- Service Item 4 -->
            <div class="service-card p-8 border border-light transition-all hover:border-primary group">
                <span class="material-symbols-outlined text-4xl mb-6 text-gold">auto_awesome</span>
                <h3 class="mb-4 text-xl">Restoration</h3>
                <p class="text-secondary text-sm">Bringing heritage models back to factory-floor condition with meticulous attention to detail.</p>
            </div>
        </div>
    </div>
</section>

<!-- Boutique Experience -->
<section class="py-section bg-surface-soft">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
            <div>
                <h2 class="mb-6">The Boutique Standard</h2>
                <p class="text-secondary text-lg mb-8">
                    We bridge the gap between owner and engine. At MB EURO TECH, you speak directly with the technician working on your vehicle via dedicated WhatsApp channels. No middleman, no confusion—just technical transparency.
                </p>
                <ul class="space-y-6 mb-8">
                    <li class="flex items-center gap-4">
                        <span class="material-symbols-outlined text-gold">check_circle</span>
                        <span class="font-bold">Live photo/video updates of repair progress</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <span class="material-symbols-outlined text-gold">check_circle</span>
                        <span class="font-bold">Immediate expert consultations</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <span class="material-symbols-outlined text-gold">check_circle</span>
                        <span class="font-bold">Digital service history vault</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn--primary">Learn More</a>
            </div>
            
            <div class="chat-preview-box bg-white p-6 rounded-xl shadow-xl border border-light max-w-sm mx-auto lg:ml-auto">
                <div class="flex items-center gap-4 mb-6 pb-4 border-b border-light">
                    <div class="w-12 h-12 rounded-full bg-silver flex items-center justify-center text-white">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                    <div>
                        <p class="font-bold text-sm">Lead Technician</p>
                        <p class="text-xs text-gold">Online • Mercedes Specialist</p>
                    </div>
                </div>
                <div class="chat-messages space-y-4 mb-6">
                    <div class="bg-surface-soft p-3 rounded-lg text-sm max-w-[85%]">
                        Hi! I've finished the diagnostic on your E63. The turbo seals need replacement.
                    </div>
                    <div class="bg-primary text-white p-3 rounded-lg text-sm ml-auto max-w-[85%]">
                        Thanks for the update. Can you show me the wear?
                    </div>
                    <div class="bg-surface-soft p-3 rounded-lg text-sm max-w-[85%]">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCU8qtooUkon-6c09ewNzsbm2m5ONVRcyaiVZBcZmACuxbAh5X1YHKBxx9d1bV4MsaT5LoCoXfjT6m7N54KlRGVIpfFgBn4E0SLaii1LED8B93W7vZb8jbgucH4bG0WQZ2a7XJ5pPUeSgr-8kawB0yB4qw1Q5OBMCbvvDuLLD-gBJDTsrt4i8OClbbH-mZuqHNcQvxBc5lXI3K5NZ5jO_Zryg6B1Pq7477-6rgDmXzyhbWxT4Uj5zPvLuFYMeJQMELLJcWb0NZ-l6A" alt="Engine" class="rounded mb-2">
                        Absolutely. See the residue here. Sending quote now.
                    </div>
                </div>
                <div class="chat-input flex gap-2">
                    <div class="flex-1 bg-surface-soft rounded-full px-4 py-2 text-xs text-silver">Type message...</div>
                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white">
                        <span class="material-symbols-outlined text-xs">send</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section class="py-section bg-surface-pure">
    <div class="container">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="mb-2">Visual Authority</h2>
                <p class="text-secondary mt-2">A testament to our precision engineering.</p>
            </div>
            <a href="#" class="text-gold text-xs font-bold uppercase tracking-widest border-b border-gold pb-1">Full Portfolio</a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 h-[600px]">
            <div class="md:col-span-8 h-full overflow-hidden">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDeZ0n8G2vzMhrWkShB8sx7_pUJ3YK8OatIshBX5ZH8l9mBvftNk97VGuFwqQXWYCY4fjmjpgmRkKHJ6oo46J3K44kvf080QMMM2klTg-0Esrvyo7CLsYQoNGHh-X9AGzmZkIVugcqmeWLzwqcqcQHf2QDKKgcP0FuI7ddNMF_xsmrQwvONNl-KhNZU9tnSa65q6CBaMyxwqilNJ9AhyUo_87SgVcRYBX2IUQvqzv-4blgFPiULWMuhiLmeks_yFgQAraxnAg_LUXk" 
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" alt="Workshop">
            </div>
            <div class="md:col-span-4 grid grid-rows-2 gap-4 h-full">
                <div class="overflow-hidden">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIcOq18O9SqzTaG1mAH_J2jx5hnqGtna-3fcdDICJ9chW_Qo5dSEXrTcFr_fdCErhbyKjw-XRccOOz7MmbNHOWVGVqksmJGwB4bdbXg0p8Uk4iJTCnik0Yz6wmqRbR-LMT6N3oWIR7Vt4O1XGagZaPZ9ON77geJ3dAaPYBc6DAwIRk1sw7m5RSs9cyrQJycX97Om6m_Tm19v1zpx5IT8LE2hrbPbet-kEeuGUe2Xztykr3IJbM49drMfm7jROSdwsxuKThGyocOvk" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" alt="Mercedes">
                </div>
                <div class="overflow-hidden">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4qBGKy1NBWSOLnDaYkT1sJ_ukpr2ex9mji_omPQJT7fOpaj8s6qUHLXeZdv6g5O5fxMkxKWBHHURpGtVw3iW6a6VaHRevUl5pPIk2wt5LfuVsDpgcLMKf6Iwje9KPU-vaQW-E1uSNUY1Fq2-iu1PmiU11eVgS19KYDZsqxeGGpg6Z0jtIz7qsyv7UptrIPvo_1oK6qpLrOj3DJcbjgdaNDvykEGBiz-ZyW9hWPUEAMQ8_D6-Jr0K5sTMVY4PgdPb0fTV5KXPsg4Q" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" alt="Engine bay">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Metrics Section -->
<section class="py-24 bg-primary text-white text-center">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
            <div>
                <p class="text-6xl font-extrabold text-gold mb-2">15+</p>
                <p class="text-xs uppercase tracking-widest text-silver">Years Experience</p>
            </div>
            <div>
                <p class="text-6xl font-extrabold text-gold mb-2">100%</p>
                <p class="text-xs uppercase tracking-widest text-silver">Genuine Parts</p>
            </div>
            <div>
                <p class="text-6xl font-extrabold text-gold mb-2">3k+</p>
                <p class="text-xs uppercase tracking-widest text-silver">Mercedes Serviced</p>
            </div>
        </div>
    </div>
</section>

<!-- Blog / Insights -->
<section class="py-section bg-surface-soft">
    <div class="container">
        <div class="mb-12">
            <h2 class="mb-2">Expert Hub</h2>
            <p class="text-secondary mt-2">Technical insights for the informed owner.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Blog Card 1 -->
            <div class="bg-white border border-light group hover:shadow-xl transition-all">
                <div class="aspect-video overflow-hidden">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCfGzaDCi5GUtltXL2MaOwERi4sZQcbifhz2zQSzQN8CDBhgihuvwLboGgUREnqkjxX0z1ANnCqSh2vDtFfjA9VXnBakDd4bO2lchfyg5rJCIzjnefiyyE0SnXt6zulxAjdhUmDMBaklz6IxtWXF6S0FBXVpG1GZw1D4-y38XE0hmT8BIjGhEm_05D4POAGV8H_xkyWNE0mp5rt9twdwwp1XD7w3bZfwvjbeu0pEtIZnzOIejEH0ACGby8z-HHGvgtDUSzQ367eABM" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Brakes">
                </div>
                <div class="p-8">
                    <span class="text-gold text-xs font-bold uppercase mb-4 block">Maintenance Tips</span>
                    <h4 class="mb-4 text-lg">When to Replace Ceramic Brake Pads</h4>
                    <a href="#" class="material-symbols-outlined text-primary">arrow_forward</a>
                </div>
            </div>
            <!-- Blog Card 2 -->
            <div class="bg-white border border-light group hover:shadow-xl transition-all">
                <div class="aspect-video overflow-hidden">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6eK7gy5BXaqnrMyGPBu7mPNC6dkv5RBXjZ-12sgAp7MLGLAYo23ULXpSEK22zMY7fr0yLcg1yf1NAmYZhx3d8XF5NEqamzlYcQzA9gIN64dcJ10i8sEqydJSKm6CXsxPI8a63W8iQT1EjNxjsnZwu84vr7M0-7YgWrNxxOi29tJKxDnDBwxi3JUAuVy4YV9KWNJSV2bhE7Sor2IlgzzWx6uLM7gBXkJtkByjPi5JiDegQPIALtwe97UzGVzlmvp5cUPBhiTtt7BY" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Oil">
                </div>
                <div class="p-8">
                    <span class="text-gold text-xs font-bold uppercase mb-4 block">Technical Insight</span>
                    <h4 class="mb-4 text-lg">The Importance of MB 229.5 Oil</h4>
                    <a href="#" class="material-symbols-outlined text-primary">arrow_forward</a>
                </div>
            </div>
            <!-- Blog Card 3 -->
            <div class="bg-white border border-light group hover:shadow-xl transition-all">
                <div class="aspect-video overflow-hidden">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCz6PMiCHe4avBHlqpcBONAAzUWQJuDivjueSk1cvYkVMHykTXrV-Bb1bVGu0ekyDh6_BmgiWdYNK2RfTgLMza99xwAFZ9pWaXx33eeSFlGHQKWpxK3qWx7nfR8nExp8_HDbwQ7mpZoklkLRnpMdCHQmQeBCKNsGCkmBadvQq_vkwSgj1DMgJTLtvVBWwKAv-i4ttrDGViT4nTW6XBFLwJrEt7Kgqfpoa6YKJcPXV2KWRbdcbClyvTG_Ofokk3IbuKtXAuBGjiCSzQ" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Classic">
                </div>
                <div class="p-8">
                    <span class="text-gold text-xs font-bold uppercase mb-4 block">Restoration</span>
                    <h4 class="mb-4 text-lg">Preserving Your Classic 190E</h4>
                    <a href="#" class="material-symbols-outlined text-primary">arrow_forward</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
