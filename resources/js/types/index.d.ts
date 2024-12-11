import { Config } from 'ziggy-js';

export interface User {
    id: number;
    name: string;
    email: string;
    email_verified_at?: string;
}

export type TPaginatedData<T> = {
    data: T[];
    links: Record<string, string>;
};

export type TFeature = {
    id: number;
    name: string;
    description: string;
    user: User;
    created_at: string;
    upvote_count: number;
    user_has_upvoted: boolean;
    user_has_downvoted: boolean;
    comments: Comment[];
};

export type PageProps<
    T extends Record<string, unknown> = Record<string, unknown>,
> = T & {
    auth: {
        user: User;
    };
    ziggy: Config & { location: string };
};
