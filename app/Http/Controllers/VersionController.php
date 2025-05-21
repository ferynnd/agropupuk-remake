<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class VersionController extends Controller
{
    public function showLastUpdate()
    {
        $owner = "ferynnd";
        $repo = "agropupuk-remake";
        $token = env('GITHUB_TOKEN');

        $url = "https://api.github.com/repos/{$owner}/{$repo}/commits";

        try {
            $response = Http::withHeaders([
                'Accept' => 'application/vnd.github.v3+json',
                'User-Agent' => 'LaravelApp',
                'Authorization' => 'token ' . $token
            ])->get($url);

            $response->throw();

            $commits = $response->json();

            if (!empty($commits)) {
                $lastCommit = $commits[0];
                $lastUpdateInfo = [
                    'hash' => substr($lastCommit['sha'], 0, 7),
                    'message' => $lastCommit['commit']['message'],
                    'author' => $lastCommit['commit']['author']['name'] ?? 'Unknown',
                    'date' => Carbon::parse($lastCommit['commit']['author']['date'])->diffForHumans(),
                    'full_date' => Carbon::parse($lastCommit['commit']['author']['date'])->format('Y-m-d H:i:s')
                ];

                return view('version_info', compact('lastUpdateInfo'));
            } else {
                return view('version_info', ['lastUpdateInfo' => null, 'error' => 'No commits found.']);
            }
        } catch (\Exception $e) {
            return view('version_info', ['lastUpdateInfo' => null, 'error' => 'Could not fetch GitHub info: ' . $e->getMessage()]);
        }
    }

    public function listLastUpdate()
    {
        $owner = "ferynnd";
        $repo = "agropupuk-remake";
        $token = env('GITHUB_TOKEN');

        $url = "https://api.github.com/repos/{$owner}/{$repo}/commits";

        try {
            $response = Http::withHeaders([
                'Accept' => 'application/vnd.github.v3+json',
                'User-Agent' => 'LaravelApp',
                'Authorization' => 'token ' . $token
            ])->get($url);

            $response->throw();

            $commits = $response->json();

            if (is_array($commits) && count($commits) > 0) {
                $commitList = collect($commits)->take(5)->map(function ($commit) {
                    return [
                        'hash' => substr($commit['sha'], 0, 7),
                        'message' => $commit['commit']['message'],
                        'author' => $commit['commit']['author']['name'] ?? 'Unknown',
                        'date' => Carbon::parse($commit['commit']['author']['date'])->diffForHumans(),
                        'full_date' => Carbon::parse($commit['commit']['author']['date'])->format('Y-m-d H:i:s')
                    ];
                })->toArray();

                return view('version_info', ['commits' => $commitList]);
            } else {
                return view('version_info', ['commits' => [], 'error' => 'No commits found.']);
            }
        } catch (\Exception $e) {
            return view('version_info', ['commits' => [], 'error' => 'Could not fetch GitHub info: ' . $e->getMessage()]);
        }
    }
}
