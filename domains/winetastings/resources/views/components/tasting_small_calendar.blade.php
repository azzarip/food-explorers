@props(['tastingDates'])
<div
  x-data="simpleCalendar({ eventDates: @js($tastingDates) })"
  x-init="build()"
  class="sticky top-6 w-full rounded-2xl max-w-xs mx-auto mt-24  "
>
  <!-- Header -->
  <div class="flex items-center justify-between mb-2">
    <button type="button" @click="prev()" class="px-2 py-1 rounded hover:bg-slate-100">&lt;</button>
    <div class="font-semibold" x-text="monthLabel"></div>
    <button type="button" @click="next()" class="px-2 py-1 rounded hover:bg-slate-100">&gt;</button>
  </div>

  <!-- Weekdays -->
  <div class="grid grid-cols-7 text-center text-xs font-medium text-slate-800 mb-1">
    <div>M</div><div>T</div><div>W</div><div>T</div><div>F</div><div>S</div><div>S</div>
  </div>

  <!-- Days grid -->
  <div class="grid grid-cols-7 gap-1">
    <template x-for="cell in cells" :key="cell.key">
      <button
        type="button"
        @click="cell.hasEvent && goTo(cell.dateStr)"
        class="h-9 rounded-md text-sm transition"
        :class="[
          cell.inMonth ? 'text-slate-900' : 'text-slate-400',
          cell.hasEvent ? 'bg-sky-50 hover:bg-sky-100 border border-sky-200 cursor-pointer' : '',
          cell.isToday && cell.hasEvent ? 'bg-sky-600/80 hover:bg-sky-700 text-white shadow-md' : '',
          cell.isToday ? 'font-semibold' : '',
        ]"
        :disabled="!cell.hasEvent"
      >
        <span x-text="cell.d"></span>
      </button>
    </template>
  </div>
</div>


@push('scripts')
  <script>
  function simpleCalendar({ eventDates = [] }) {
    const eventSet = new Set(eventDates);
    const state = {
      year: new Date().getFullYear(),
      month: new Date().getMonth(),
      cells: [],
      get monthLabel() {
        return new Date(this.year, this.month, 1)
          .toLocaleDateString(undefined, { month: 'long', year: 'numeric' });
      },
      build() {
        const first = new Date(this.year, this.month, 1);
        const startWeekday = (first.getDay() + 6) % 7; // Monday=0..Sunday=6
        const daysInMonth = new Date(this.year, this.month + 1, 0).getDate();


        const cells = [];

        // leading blanks
        for (let i = 0; i < startWeekday; i++) {
          const d = new Date(this.year, this.month, -(startWeekday - 1 - i));
          cells.push(this.makeCell(d, false));
        }
        // month days
        for (let d = 1; d <= daysInMonth; d++) {
          cells.push(this.makeCell(new Date(this.year, this.month, d), true));
        }
        // trailing blanks to complete weeks
        while (cells.length % 7 !== 0) {
          const last = cells[cells.length - 1].dateObj;
          const next = new Date(last);
          next.setDate(last.getDate() + 1);
          cells.push(this.makeCell(next, false));
        }

        this.cells = cells.map((c, i) => ({ ...c, key: i }));
      },
      makeCell(dateObj, inMonth) {
        const y = dateObj.getFullYear();
        const m = String(dateObj.getMonth() + 1).padStart(2, '0');
        const d = String(dateObj.getDate()).padStart(2, '0');
        const dateStr = `${y}-${m}-${d}`;
        const now = new Date();
        now.setHours(0,0,0,0);    
        dateObj.setHours(0,0,0,0);
        const isToday = dateObj.getTime() === now.getTime();

        return {
          dateObj,
          dateStr,
          d: dateObj.getDate(),
          inMonth,
          hasEvent: eventSet.has(dateStr),
          isToday,
        };
      },
      prev() {
        this.month--;
        if (this.month < 0) { this.month = 11; this.year--; }
        this.build();
      },
      next() {
        this.month++;
        if (this.month > 11) { this.month = 0; this.year++; }
        this.build();
      },
      goTo(dateStr) {
        const el = document.getElementById(dateStr);
        if (!el) return;
        el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        el.dispatchEvent(new CustomEvent('force-open', { bubbles: true }));
      },
    };
    return state;
  }
</script>
@endpush