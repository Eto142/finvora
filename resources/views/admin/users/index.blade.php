@include('admin.header', ['title' => 'Users', 'heading' => 'Users'])

<div class="card">
    <div class="card-header">
        <form method="GET" class="d-flex gap-2">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name, email or username" class="form-control">
            <button type="submit" class="btn btn-primary text-nowrap">Search</button>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>KYC</th>
                    <th>Joined</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td class="text-light">{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->country ?? '—' }}</td>
                        <td>
                            <span class="badge {{ $user->isKycApproved() ? 'badge-approved' : 'badge-pending' }}">
                                {{ $user->kycStatusLabel() }}
                            </span>
                        </td>
                        <td>{{ $user->created_at->format('M d, Y') }}</td>
                        <td class="text-end">
                            <a href="{{ route('admin.users.show', $user) }}" class="btn btn-sm btn-outline-primary">View</a>
                        </td>
                    </tr>
                @empty
                    <tr><td class="text-center py-4" colspan="6">No users found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $users->links() }}
    </div>
</div>

@include('admin.footer')
