
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>{{ $blog->title }}</title>
</head>

<body style="margin:0;padding:0;background:#f4f4f4;font-family:Arial,sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style=" background:#ffffff; margin-top:40px; border-radius:12px; overflow:hidden;">
                    {{-- BLOG IMAGE --}}
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $blog->featured_image) }}" width="100%" style="display:block;">
                        </td>
                    </tr>

                    {{-- BLOG CONTENT --}}
                    <tr>
                        <td style="padding:30px;">
                            <h1 style="margin:0 0 20px; color:#111827; font-size:28px;">{{ $blog->title }}</h1>

                            <p style="color:#4b5563; line-height:1.7; font-size:16px;">{{ Str::limit(strip_tags($blog->content), 180) }}</p>

                            {{-- READ BLOG BUTTON --}}
                            <div style="margin-top:30px;">
                                <a
                                   {{-- href="{{route('blog.show'.$blog->slug)}}" --}}
                                   href="{{ route('blog.show', $blog->slug)}}"
                                    style="background:#111827; color:#ffffff; text-decoration:none; padding:14px 28px; border-radius:8px; display:inline-block; font-weight:600;">
                                    Read Full Blog
                                </a>
                            </div>
                            
                            <div style="margin-top:40px; padding-top:20px; border-top:1px solid #e5e7eb; font-size:12px; color:#9ca3af;">
                                You are receiving this email because you subscribed
                                to BitSabio blog updates.
                                <br><br>

                                <a
                                    {{-- href="{{ route('unsubscribe', $subscriber->email) }}" --}}
                                     href="{{ route('unsubscribe', $subscriber->email) }}"
                                    style="color:#ef4444; text-decoration:none;">
                                    Unsubscribe
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</body>

</html>
