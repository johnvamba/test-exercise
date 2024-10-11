<div class="container mx-auto p-4 bg-white shadow-lg rounded-lg">
  <div class="flex justify-between items-center mb-4">
    <div class="flex items-center space-x-2 mb-4">
      <label for="textQuery">Query:</label>
      <input type="text" class="px-2 py text-lg rounded-md bg-white border border-gray-400 w-full outline-blue-500" id="textQuery" wire:model.live="textQuery"> 
    </div>
    <select 
      class="border rounded px-2 py-1 text-sm"
    >
      <option value="30 days">30 days</option>
    </select>
  </div>

  <div class="overflow-x-auto">
    <table class="min-w-full">
      <thead>
        <tr class="bg-gray-100">
          <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
          <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($items as $item) 
          <tr :key="{{ $item->id }}" class="border-b">
            <td class="px-4 py-2 whitespace-nowrap">{{ $item->name }}</td>
            <td class="px-4 py-2 whitespace-nowrap">
              <button class="bg-pink-500 text-white px-3 py-1 rounded text-sm">Generate Content</button>
            </td>
          </tr>
        @endforeach 
      </tbody>
    </table>
  </div>

  <div class="flex justify-between items-center mt-4">
    <div class="flex items-center space-x-2">
      <span class="text-sm">Rows per page</span>
      <select wire:model.live="perPage" id="perPage"> 
        @foreach($options as $option) 
        <option value="{{ $option }}">{{ $option }}</option>  
        @endforeach 
      </select> 
    </div>
    {{ $items->links() }} 
  </div>
</div>