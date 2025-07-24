<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
{
    public function index()
    {
        $members = TeamMember::latest()->get();
        return view('admin.team.index',
            [
                'members'         => $members,
                'pageTitle'       => 'Team Members',
                'pageDescription' => 'Team Members',
                'pageScript'      => 'team-members',
            ]
        );
    }

    public function create()
    {
        return view('admin.team.form',
            [
                'pageTitle'       => 'Team Members',
                'pageDescription' => 'Team Members',
                'pageScript'      => 'team-members',
            ]
        );
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'                => 'required|string',
            'title'               => 'required|string',
            'description'         => 'required|string',
            'image'               => 'nullable|image',
            'social_links'        => 'nullable|array',
            // 'social_links.*.icon' => 'required_with:social_links.*.url|string',
            // 'social_links.*.url'  => 'required_with:social_links.*.icon|url',
            'team_type' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('team', 'public');
        }


        TeamMember::create($data);

        return redirect()->route('admin.team-members.index')->with('success', 'Team member added!');
    }

    public function edit(TeamMember $teamMember)
    {
        return view('admin.team.form',
            [
                'teamMember'      => $teamMember,
                'pageTitle'       => 'Team Members',
                'pageDescription' => 'Team Members',
                'pageScript'      => 'team-members',
            ]
        );
    }

    public function update(Request $request, TeamMember $teamMember)
    {
        $data = $request->validate([
            'name'                => 'required|string',
            'title'               => 'required|string',
            'description'         => 'required|string',
            'image'               => 'nullable|image',
            'social_links'        => 'nullable|array',
            // 'social_links.*.icon' => 'required_with:social_links.*.url|string',
            // 'social_links.*.url'  => 'required_with:social_links.*.icon|url',
            'team_type' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            if ($teamMember->image) {
                Storage::disk('public')->delete($teamMember->image);
            }
            $data['image'] = $request->file('image')->store('team', 'public');
        }

        $teamMember->update($data);

        return redirect()->route('admin.team-members.index')->with('success', 'Team member updated!');
    }

    public function destroy(TeamMember $teamMember)
    {
        if ($teamMember->image) {
            Storage::disk('public')->delete($teamMember->image);
        }

        $teamMember->delete();
        return back()->with('success', 'Deleted successfully');
    }
}
