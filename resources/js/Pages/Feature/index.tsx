import AuthLayout from '@/Layouts/AuthenticatedLayout';
import { TFeature, TPaginatedData } from '@/types';

const index = ({ features }: { features: TPaginatedData<TFeature> }) => {
    console.log(features);
    return (
        <AuthLayout>
            <div>this is index page </div>
        </AuthLayout>
    );
};

export default index;
