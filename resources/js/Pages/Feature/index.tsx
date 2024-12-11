import { TFeature, TPaginatedData } from '@/types';

const index = ({ features }: { features: TPaginatedData<TFeature> }) => {
    console.log(features);
    return <div></div>;
};

export default index;
