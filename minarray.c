
#include <stdio.h>

int main()
{
    int a[20],i,min=0,size;
    scanf("%d",&size);
    for(i=0;i<size;i++)
    {   
        scanf("%d",&a[i]);
        if(a[i]<min)
        {
            min=a[i];
        }
    }
    printf("%d",min);
    return 0;
}
