@props([
    'index',
    'question',
    'answer',
])

<div class="overflow-hidden rounded-[10px] border border-slate-200 bg-white">
    <h3>
        <button
            type="button"
            class="flex w-full items-center justify-between gap-4 px-5 py-4 text-left text-sm font-semibold text-slate-900 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-inset"
            @click="active === {{ $index }} ? active = null : active = {{ $index }}"
            :aria-expanded="(active === {{ $index }}).toString()"
        >
            <span>{{ $question }}</span>
            <i class="ph ph-caret-down text-lg text-primary-700 transition-transform" :class="{ 'rotate-180': active === {{ $index }} }" aria-hidden="true"></i>
        </button>
    </h3>

    <div x-show="active === {{ $index }}" x-transition.opacity.duration.200ms>
        <div class="border-t border-slate-200 px-5 py-4 text-sm leading-7 text-slate-500">
            {{ $answer }}
        </div>
    </div>
</div>
