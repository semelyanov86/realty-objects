export interface Manager {
    id: string;
    first_name: string;
    last_name: string;
    email: string;
    phone: string;
    title: string;
    imagename: string;
    image_details: ImageDetails | null;
}

interface ImageDetails {
    id: string;
    orgname: string;
    path: string;
    name: string;
    url: string;
}
