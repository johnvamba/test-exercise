<div className="container mx-auto p-4 bg-white shadow-lg rounded-lg">
  <div className="flex justify-between items-center mb-4">
    <div className="flex items-center space-x-2">

      <select 
        className="border rounded px-2 py-1 text-sm"
      >
        <option value="embarque.io">embarque.io</option>
      </select>
      <ChevronDown className="w-4 h-4 text-gray-500" />
    </div>
    <select 
      className="border rounded px-2 py-1 text-sm"
    >
      <option value="30 days">30 days</option>
    </select>
  </div>

  <div className="overflow-x-auto">
    <table className="min-w-full">
      <thead>
        <tr className="bg-gray-100">
          <th className="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
          <th className="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($items as $item) 
          <tr :key="{{ $item->id }}" className="border-b">
            <td className="px-4 py-2 whitespace-nowrap">{{ $item->name }}</td>
            <td className="px-4 py-2 whitespace-nowrap">
              <button className="bg-pink-500 text-white px-3 py-1 rounded text-sm">Generate Content</button>
            </td>
          </tr>
        @endforeach 
      </tbody>
    </table>
  </div>

  <div className="flex justify-between items-center mt-4">
    <div className="flex items-center space-x-2">
      <span className="text-sm">Rows per page</span>
      <select wire:model.live="perPage" id="perPage"> 
        @foreach($options as $option) 
        <option value="{{ $option }}">{{ $option }}</option>  
        @endforeach 
      </select> 
    </div>
    {{ $items->links() }} 

    <div className="flex items-center space-x-2">
      <span className="text-sm">Showing 1 to 3 of 8 results</span>
      <div className="flex space-x-1">
        <button className="p-1 rounded bg-gray-200"><ChevronLeft className="w-4 h-4" /></button>
        <button className="p-1 rounded bg-pink-500 text-white">1</button>
        <button className="p-1 rounded bg-gray-200">2</button>
        <button className="p-1 rounded bg-gray-200">3</button>
        <button className="p-1 rounded bg-gray-200"><ChevronRight className="w-4 h-4" /></button>
      </div>
    </div>
  </div>
</div>